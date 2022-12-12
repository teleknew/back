<?php

namespace Models;

use Core\DbModel;
use Helpers\Helpers;
use Db\DbPdo;
use Models\ItemsEditing;

class LogicalOutputs
{
    public function loadList($Data/*, $UserInfo*/)
    {
        //print_r($Data['get_data']);
        //print_r(" - Зашли class LogicalInputs - loadList");
        $Result = [
            "Data" => $Data,
            "Errors" => "",
            "Result" => false
        ];

        try {
            if ($Data['get_data'] == 'all') {

                $Select = 'SELECT * FROM interface.logic_outputs WHERE id > :id order by id';
                $SelectParams = [
                    ":id" => 0
                ];

                $db = DbPdo::getInstance();
                $SelectResults = $db->queryFetched($Select, $SelectParams);
                //Helpers::get_pr($SelectResults);

                foreach($SelectResults as $SelectResult){
                    if($SelectResult['sourceType'] == 'IP') {
                        $Select = 'SELECT * FROM interface.ip_outputs WHERE "idIpOutputs" = :id';
                        $SelectParams = [
                            ":id" => $SelectResult['id']
                        ];

                        $SelectRes = $db->queryFetched($Select, $SelectParams);

                        $SelectResult['IP'] = $SelectRes;
                    }

                    $Result['Result'][] = $SelectResult;
                }
            }
        }
        catch(\Exception $e)
        {
            $Result['Errors'] = "Ошибка в запросе select.\n SQL Error: {$e->getMessage()}.\n" /*SQL: {$InsertResponseQuery}.\n Params: ".print_r($InsertResponseParams,true)*/;
            //return $Result;
        }

        //print_r($SelectRes);
        //$Result['Result'] = ($Result['Errors'] == "");
        //Helpers::get_pr('Вроде сохранили');
        return $Result;
    }
    public function loadPrograms($Data/*, $UserInfo*/)
    {
        //print_r($Data['id']);
        //print_r(" - Зашли class LogicalInputs - loadList");
        $Result = [
            "Data" => $Data,
            "Errors" => "",
            "Result" => false
        ];

        //if($Data['id'] === 1)
        {
            //print_r(get_declared_classes());

            /**
             * IP-адрес хоста gRPC-сервиса
             */
            define("HOST_IP", "172.30.1.211");

            /**
             * Порт хоста gRPC-сервиса (не исправлять)
             */
            define("HOST_PORT", 54434);

            /**
             * Клиент для работы с gRPC-сервисом
             */
            $client = new protoClient(HOST_IP . ":" . HOST_PORT, [
                'credentials' => \Grpc\ChannelCredentials::createInsecure(),
            ]);


            /** возвращаем список графов */

            /**
             * Возврщает список входных устройств Графа
             * @return sl_device_list_proto
             */
            function getGraphInputDeviceList(protoClient $client, $graph): sl_device_list_proto
            {
                list($response, $status) = $client->get_graph_input_device_list($graph)->wait();
                if ($status->code !== \Grpc\STATUS_OK) {
                    echo "ERROR: " . $status->code . ", " . $status->details . PHP_EOL;
                    exit(1);
                }
                return $response;
            }

            function getGraphs(protoClient $client): sl_graph_list_proto
            {
                list($response, $status) = $client->get_graph_list(new sl_empty_proto())->wait();
                if ($status->code !== \Grpc\STATUS_OK) {
                    echo "ERROR: " . $status->code . ", " . $status->details . PHP_EOL;
                    exit(1);
                }
                return $response;
            }

            /**
             * Возврщает список входных программ конкретного устройства Графа
             * @return sl_input_info_proto
             */
            function getInputProgramListRemuxer(protoClient $client, sl_graph_proto $graph, sl_device_proto $device): sl_input_info_proto
            {
                $graph_device = new sl_graph_device_proto();
                $graph_device->setGraph($graph);
                $graph_device->setDevice($device);
                list($response, $status) = $client->get_remuxer_input_info($graph_device)->wait();
                if ($status->code !== \Grpc\STATUS_OK) {
                    echo "ERROR: " . $status->code . ", " . $status->details . PHP_EOL;
                    exit(1);
                }
                return $response;
            }


            /** Вывод графов + получение объекта конкретного Графа*/
            $graphs = getGraphs($client);
            //echo "\nГрафы: \n";
            $count = 1;
            foreach ($graphs->getList() as $graph) {
                //echo $count++ . ") " . $graph->getName() . PHP_EOL;
                if ($graph->getName() == 'pioneer1') {
                    $myGraph = $graph;
                }
            }

            $myGraphGuid = $myGraph->getGuid();

            /** получение конкретного графа по Guid начало */
            foreach ($graphs->getList() as $graph1) {
                if ($graph1->getGuid() == $myGraphGuid) {
                    $myGraph1 = $graph1;
                    break;
                }
            }

            $graphDevice = getGraphInputDeviceList($client, $myGraph1);

            //echo "Входные устройства Графа сначала: \n";
            $count = 1;
            foreach ($graphDevice->getList() as $inputDevice) {
                //echo $count++ . ") " . $inputDevice->getDisplayName() . PHP_EOL;
                if ($inputDevice->getDisplayName() == 'SL Network Source (Raw)') {
                    $currentDevice = $inputDevice;
                }
            }

            $programs = getInputProgramListRemuxer($client, $myGraph1, $currentDevice);
            $programsDevice = $programs->getPat()->getPat();

            $programsMap = $programsDevice->getProgramMap();
            $count = 1;

            //echo "Входные программы Графа Pat: \n";
            //echo "ProgramNumber MapPID" . PHP_EOL;
            $programItems = json_decode($programs->getSdt()->getActual()->serializeToJsonString())->sds;
            $programs = [];
            foreach ($programsMap as $programMap) {
                //echo $count++ . ") " . $programMap->getProgramNumber() . " " . $programMap->getMapPID() . PHP_EOL;
                foreach ($programItems as $programItem) {

                    if($programMap->getProgramNumber() == $programItem->serviceId) {
                        $programs[] = [
                            'serviceId' => $programItem->serviceId,
                            'serviceType' => $programItem->descriptors[0]->serviceDescriptor->serviceType,
                            'serviceProviderName' => $programItem->descriptors[0]->serviceDescriptor->serviceProviderName,
                            'serviceName' => $programItem->descriptors[0]->serviceDescriptor->serviceName
                        ];
                    }
                }
            }

            //print_r($programs);
            $Result['Result'] = [
              'Programs' => $programs
            ];
        }

        return $Result;
    }

    public function createOutputStream($Data/*, $UserInfo*/)
    {
        $Result = [
            "Data" => $Data,
            "Errors" => "",
            "Result" => false
        ];

        try {
            $db = DbPdo::getInstance();
            $db->beginTransaction();

            $InsertStreamQuery = "INSERT INTO interface.logic_outputs
                                ( 
                                \"tsNumber\", 
                                \"idPhysicalOutput\", 
                                \"tsId\", 
                                bitrate, 
                                \"namePort\", 
                                description, 
                                \"sourceType\", 
                                \"packetSize\", 
                                \"idIpOutputs\", 
                                \"mode\", 
                                \"activeOutput\", 
                                \"countService\",
                                \"originalNetworkId\",
                                \"networkId\")
                                VALUES
                                 (
                                  :tsNumber,
                                  :idPhysicalOutput,
                                  :tsId,
                                  :bitrate,
                                  :namePort,
                                  :description,
                                  :sourceType,
                                  :packetSize,
                                  :idIpOutputs,
                                  :mode,
                                  :activeOutput,
                                  :countService,
                                  :originalNetworkId,
                                  :networkId
                                  )
                                  RETURNING id;";


            $InsertStramParams = [
                ":tsNumber" => Helpers::getTsNumber('logic_outputs') + 1,
                ":idPhysicalOutput" => $Data['idPhysicalOutput'],
                ":tsId" => $Data['tsId'],
                ":bitrate" => $Data['bitrate'],
                ":namePort" => $Data['namePort'],
                ":description" => $Data['description'],
                ":sourceType" => $Data['sourceType'],
                ":packetSize" => $Data['packetSize'],
                ":idIpOutputs" => $Data['idIpOutputs'],
                ":mode" => $Data['mode'],
                ":activeOutput" => $Data['activeOutput'],
                ":countService" => $Data['countService'],
                ":originalNetworkId" => $Data['originalNetworkId'],
                ":networkId" => $Data['networkId']
            ];

            $ResultInsertStreamQuery = $db->queryFetched($InsertStreamQuery, $InsertStramParams);
            //print_r(Helpers::get_pr($ResultInsertStreamQuery[0]['id']));

            if($Data['sourceType'] == 'IP'){
                /** если типа IP, тогда кладем сюда interface.ip_inputs еще данные с IP
                 * И коммит сделать после успешно создания всех запросов и графов
                 */
                $InsertIpInputsQuery = "INSERT INTO interface.ip_outputs
                                    (
                                    \"idIpOutputs\",
                                    \"namePort\",
                                    \"idPhysicalOutput\",
                                    \"ipType\",
                                    \"ipVersion\",
                                    \"ipPort\",
                                    \"ipNumberPort\",
                                    \"tcpUdpPort\",
                                    encapsulation,
                                    \"host\"
                                    )
                                    VALUES
                                    (
                                    :idIpOutputs,
                                    :namePort,
                                    :idPhysicalOutput,
                                    :ipType,
                                    :ipVersion,
                                    :ipPort,
                                    :ipNumberPort,
                                    :tcpUdpPort,
                                    :encapsulation,
                                    :host
                                    )
                                    RETURNING id;";

                $InsertIpInputsQueryParams = [
                    ":idIpOutputs" => $ResultInsertStreamQuery[0]['id'],
                    ":namePort" => $Data['IP'][0]['namePort'],
                    ":idPhysicalOutput" => $Data['IP'][0]['idPhysicalOutput'],
                    ":ipType" => $Data['IP'][0]['ipType'],
                    ":ipVersion" => $Data['IP'][0]['ipVersion'],
                    ":ipPort" => $Data['IP'][0]['ipPort'],
                    ":ipNumberPort" => $Data['IP'][0]['ipNumberPort'],
                    ":tcpUdpPort" => $Data['IP'][0]['tcpUdpPort'],
                    ":encapsulation" => $Data['IP'][0]['encapsulation'],
                    ":host" => $Data['IP'][0]['host']
                ];

                $ResultInsertIpInputQuery = $db->queryFetched($InsertIpInputsQuery, $InsertIpInputsQueryParams);

            }

            $data = [
                'graphName' => $Data['IP'][0]['graphName'],
                'graphType' => 1
            ];

            $graphResult = (new ItemsEditing())->createGraph($data);
            if(!$graphResult["Result"])
                throw new \Exception("ERROR: " . $graphResult['Errors']);

            /** Добавить в БД uuid графа. **/

            $UpdateStreamQuery = 'UPDATE interface.logic_outputs SET
												"graphUuid" = :graphUuid
											WHERE id = :id';
            $UpdateParams = [
                ":graphUuid" => $graphResult['Result']['graphGuid'],
                ":id" => $ResultInsertStreamQuery[0]['id']
            ];
            $db->queryFetched($UpdateStreamQuery,$UpdateParams);

            $data = [
                'graphGuid' => $graphResult['Result']['graphGuid'],
                'ip0' =>  $Data['IP'][0]['host'],
                'port' => $Data['IP'][0]['ipNumberPort'],
                'ip2' =>  $Data['IP'][0]['ipPort']
            ];
            $deviceResult = (new ItemsEditing())->addOutputRawToGraph($data);
            //Helpers::get_pr($deviceResult);
            if(!$deviceResult['Result'])
                throw new \Exception("ERROR: " . $deviceResult['Errors']);

            /** Добавить в БД uuid входного устройства. **/

            $UpdateIpInputQuery = 'UPDATE interface.ip_outputs SET
												"guid" = :guid
											WHERE id = :id;';
            $UpdateParams = [
                ":guid" => $deviceResult['Result']->guid,
                ":id" => $ResultInsertIpInputQuery[0]['id']
            ];
            $db->queryFetched($UpdateIpInputQuery,$UpdateParams);

            $db->commit();

            $Result['Result'][] = $graphResult['Result'];
            $Result['Result'][] = $deviceResult['Result'];
        }
        catch(\Exception $e)
        {

            if($db->inTransaction())
            {
                $db->rollback();
            }

            /** нужно проверки именно существования результата $graphResult и $deviceResult
             * проверяем errors а поом существование
             */

            if($graphResult["Errors"]){
                $Result['Errors'] = "Ошибка создания графа\n SQL Error: {$e->getMessage()}.\n";
            }
            elseif($deviceResult['Errors']){
                $Result['Errors'] = "Ошибка создания устройства в графе\n SQL Error: {$e->getMessage()}.\n";
            }
            else{
                $Result['Errors'] = "Ошибка в запросе insert.\n SQL Error: {$e->getMessage()}.\n";
            }

            if($graphResult["Result"])
                (new ItemsEditing())->deleteGraph(['graphGuid' => $graphResult['Result']['graphGuid']]);
        }
        return $Result;

    }

    public function editStream($Data/*, $UserInfo*/)
    {
        $Result = [
            "Data" => $Data,
            "Errors" => "",
            "Result" => false
        ];

        try {
            $db = DbPdo::getInstance();
            $db->beginTransaction();

            $UpdateQuery = 'UPDATE interface.logic_inputs SET
                                  "idPhysicalInput"  =:idPhysicalInput,
                                  "tsId"  =:tsId,
                                  bitrate  =:bitrate,
                                  "namePort"  =:namePort,
                                  description  =:description,
                                  "sourceType"  =:sourceType,
                                  "packetSize"  =:packetSize,
                                  "idIpInputs"  =:idIpInputs,
                                  "mode"  =:mode,
                                  "activeInput"  =:activeInput,
                                  countService =:countService
                            WHERE id = :id
                            RETURNING id';

            $UpdateParams = [
                ":idPhysicalInput" => $Data['idPhysicalInput'],
                ":tsId" => $Data['tsId'],
                ":bitrate" => $Data['bitrate'],
                ":namePort" => $Data['namePort'],
                ":description" => $Data['description'],
                ":sourceType" => $Data['sourceType'],
                ":packetSize" => $Data['packetSize'],
                ":idIpInputs" => $Data['idIpInputs'],
                ":mode" => $Data['mode'],
                ":activeInput" => $Data['activeInput'],
                ":countService" => $Data['countService'],
                ":id" => $Data['id']
            ];

            $ResultQuery = $db->queryFetched($UpdateQuery, $UpdateParams);

            $db->commit();

            if(count($ResultQuery))
                $Result['Result'] = true;
        }
        catch(\Exception $e)
        {

            if($db->inTransaction())
            {
                $db->rollback();
            }

            $Result['Errors'] = "Ошибка в запросе insert.\n SQL Error: {$e->getMessage()}.\n" /*SQL: {$InsertResponseQuery}.\n Params: ".print_r($InsertResponseParams,true)*/;
        }

        return $Result;
    }

    public function deleteStream($Data/*, $UserInfo*/)
    {
        $Result = [
            "Data" => $Data,
            "Errors" => "",
            "Result" => false
        ];

        /** Делаем так.
         * Удаяем по id, всем остальным tsNumber делаем UPDATE спомощью счетчика начиная с удаленного
         * всем остальным, у которых tsNumber больше удаленного
         *
         */

        try {
            $db = DbPdo::getInstance();
            $db->beginTransaction();

            $DeleteQuery = 'DELETE FROM interface.logic_inputs 
                            WHERE id=:id
                            RETURNING id, "tsNumber"';
            $DeleteParams = [
                ":id" => $Data['id']
            ];
            $DeleteRes = $db->queryFetched($DeleteQuery, $DeleteParams);

            $tsNumber = $DeleteRes[0]['tsNumber'];

            $ResultQuery = [];

            if( count($DeleteRes) > 0 ){
                $Select = 'SELECT id FROM interface.logic_inputs WHERE id > '. $Data['id']. ' order by id';

                $SelectResults = $db->queryFetched($Select);

                foreach ($SelectResults as $stream){

                    $UpdateQuery = 'UPDATE interface.logic_inputs SET
                                  "tsNumber"  =:tsNumber
                            WHERE id = :id
                            RETURNING id';

                    $UpdateParams = [
                        ":tsNumber" => $tsNumber,
                        ":id" => $stream['id']
                    ];

                    $ResultQuery[] = $db->queryFetched($UpdateQuery, $UpdateParams);

                    $tsNumber += 1;

                }
            }

            $db->commit();

            if( count($ResultQuery) > 0 )
                $Result['Result'] = true;
        }
        catch(\Exception $e)
        {

            if($db->inTransaction())
            {
                $db->rollback();
            }

            $Result['Errors'] = "Ошибка в запросе insert.\n SQL Error: {$e->getMessage()}.\n" /*SQL: {$InsertResponseQuery}.\n Params: ".print_r($InsertResponseParams,true)*/;
        }

        return $Result;
    }

    public function addInputDevice_ModelRemuxer($Data/*, $UserInfo*/)
    {
        $Result = [
            "Data" => $Data,
            "Errors" => "",
            "Result" => false
        ];

        try {

            $dataDevice = [
                "graphGuid" => $Data['graphGuid'],
                "port" => $Data['port'],
                "ip0" => $Data['ip0'],
                "ip2" => $Data['ip2']
            ];

            //Helpers::get_pr($Data);
            //Helpers::get_pr($dataDevice);

            $resultDevice = (new ItemsEditing())->addInputRawToGraph($dataDevice);
            if(!$resultDevice["Result"])
                throw new \Exception("ERROR: " . $resultDevice['Errors']);

            $resultLoadModelRemuxer = (new ItemsEditing())->loadModelRemuxer($Data);
            if(!$resultLoadModelRemuxer["Result"])
                throw new \Exception("ERROR: " . $resultLoadModelRemuxer['Errors']);
            
            $Result["Result"][] = $resultDevice["Result"];
            $Result["Result"][] = $resultLoadModelRemuxer["Result"];

        } catch (\Exception $e) {

            $Result['Errors'] = "Ошибка в запросе insert.\n SQL Error: {$e->getMessage()}.\n" /*SQL: {$InsertResponseQuery}.\n Params: ".print_r($InsertResponseParams,true)*/
            ;
        }

        return $Result;
    }
}