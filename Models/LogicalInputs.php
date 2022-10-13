<?php

namespace Models;

use Core\DbModel;
use Helpers\Helpers;
use Db\DbPdo;
use sl_graph_service_protoClient as protoClient;
use sl_empty_proto;

class LogicalInputs
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

                $Select = 'SELECT * FROM interface.logic_inputs WHERE id > :id order by id';
                $SelectParams = [
                    ":id" => 0
                ];

                $db = DbPdo::getInstance();
                $SelectResults = $db->queryFetched($Select, $SelectParams);

                $Result['Result'] = [];

                foreach($SelectResults as $SelectResult){
                    if($SelectResult['sourceType'] == 'IP') {
                        $Select = 'SELECT * FROM interface.ip_inputs WHERE "idIpInputs" = :idIpInputs';
                        $SelectParams = [
                            ":idIpInputs" => $SelectResult['idIpInputs']
                        ];

                        $SelectRes = $db->queryFetched($Select, $SelectParams);

                        $SelectResult['IP'] = $SelectRes;
                    }
                    /*$Result['Result'][] = [
                        'id' => $SelectResType['id'],
                        'description' => $SelectResType['description'],
                        'ports' => $SelectRes
                    ];*/

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
        print_r($Data['id']);
        print_r(" - Зашли class LogicalInputs - loadList");
        $Result = [
            "Data" => $Data,
            "Errors" => "",
            "Result" => false
        ];


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
        echo "\nГрафы: \n";
        $count = 1;
        foreach($graphs->getList() as $graph) {
            echo $count++ . ") " . $graph->getName() . PHP_EOL;
            if($graph->getName() == 'pioneer1'){
                $myGraph = $graph;
            }
        }

        $myGraphGuid = $myGraph->getGuid();

        /** получение конкретного графа по Guid начало */
        foreach($graphs->getList() as $graph1) {
            if($graph1->getGuid() == $myGraphGuid){
                $myGraph1 = $graph1;
                break;
            }
        }

        $graphDevice = getGraphInputDeviceList($client,$myGraph1);

        echo "Входные устройства Графа сначала: \n";
        $count = 1;
        foreach($graphDevice->getList() as $inputDevice) {
            echo $count++ . ") " . $inputDevice->getDisplayName() . PHP_EOL;
            if($inputDevice->getDisplayName() == 'SL Network Source (Raw)'){
                $currentDevice = $inputDevice;
            }
        }

        $programs = getInputProgramListRemuxer($client,$myGraph1,$currentDevice);
        $programsDevice = $programs->getPat()->getPat();

        $programsMap = $programsDevice->getProgramMap();
        $count = 1;

        echo "Входные программы Графа Pat: \n";
        echo "ProgramNumber MapPID" . PHP_EOL;
        foreach ($programsMap as $programMap){
            echo $count++ . ") " . $programMap->getProgramNumber() ." ".$programMap->getMapPID(). PHP_EOL;
        }

        /*try {
            if ($Data['get_data'] == 'all') {

                $Select = 'SELECT * FROM interface.logic_inputs WHERE id > :id order by id';
                $SelectParams = [
                    ":id" => 0
                ];

                $db = DbPdo::getInstance();
                $SelectResults = $db->queryFetched($Select, $SelectParams);

                $Result['Result'] = [];

                foreach($SelectResults as $SelectResult){
                    if($SelectResult['sourceType'] == 'IP') {
                        $Select = 'SELECT * FROM interface.ip_inputs WHERE "idIpInputs" = :idIpInputs';
                        $SelectParams = [
                            ":idIpInputs" => $SelectResult['idIpInputs']
                        ];

                        $SelectRes = $db->queryFetched($Select, $SelectParams);

                        $SelectResult['IP'] = $SelectRes;
                    }
                    /*$Result['Result'][] = [
                        'id' => $SelectResType['id'],
                        'description' => $SelectResType['description'],
                        'ports' => $SelectRes
                    ];*/

       /*             $Result['Result'][] = $SelectResult;
                }
            }
        }
        catch(\Exception $e)
        {
            $Result['Errors'] = "Ошибка в запросе select.\n SQL Error: {$e->getMessage()}.\n" /*SQL: {$InsertResponseQuery}.\n Params: ".print_r($InsertResponseParams,true)*/;
            //return $Result;
        //}

        //print_r($SelectRes);
        //$Result['Result'] = ($Result['Errors'] == "");
        //Helpers::get_pr('Вроде сохранили');
        return $Result;
    }

    public function createStream($Data/*, $UserInfo*/)
    {
        //print_r($Data['get_data']);
        //print_r(" - Зашли class LogicalInputs - loadList");
        $Result = [
            "Data" => $Data,
            "Errors" => "",
            "Result" => false
        ];

        try {
            $db = DbPdo::getInstance();
            $db->beginTransaction();

            $Select = 'SELECT * FROM interface.logic_inputs WHERE id > :id order by id';
            $SelectParams = [
                ":id" => 0
            ];

            $SelectResults = $db->queryFetched($Select, $SelectParams);

            $Result['Result'] = [];

            foreach($SelectResults as $SelectResult){
                if($SelectResult['sourceType'] == 'IP') {
                    $Select = 'SELECT * FROM interface.ip_inputs WHERE "idIpInputs" = :idIpInputs';
                    $SelectParams = [
                        ":idIpInputs" => $SelectResult['idIpInputs']
                    ];

                    $SelectRes = $db->queryFetched($Select, $SelectParams);

                    $SelectResult['IP'] = $SelectRes;
                }
                $Result['Result'][] = [
                    'id' => $SelectResType['id'],
                    'description' => $SelectResType['description'],
                    'ports' => $SelectRes
                ];

                $Result['Result'][] = $SelectResult;
            }

            $db->commit();
        }
        catch(\Exception $e)
        {

            if($db->inTransaction())
            {
                $db->rollback();
            }

            $Result['Errors'] = "Ошибка в запросе select.\n SQL Error: {$e->getMessage()}.\n" /*SQL: {$InsertResponseQuery}.\n Params: ".print_r($InsertResponseParams,true)*/;
            //return $Result;
        }

        //print_r($SelectRes);
        //$Result['Result'] = ($Result['Errors'] == "");
        //Helpers::get_pr('Вроде сохранили');
        return $Result;
    }

}