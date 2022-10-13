<?php

namespace Models;

use Core\DbModel;
use Helpers\Helpers;
use Db\DbPdo;
use sl_graph_service_protoClient as protoClient;
use sl_empty_proto;
use sl_graph_list_proto;
use sl_device_list_proto;
use sl_graph_proto;
use sl_device_proto;
use sl_input_info_proto;
use sl_graph_device_proto;

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