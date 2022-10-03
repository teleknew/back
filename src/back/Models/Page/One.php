<?php

namespace Models\Page;

use Core\DbModel;
use Helpers\Helpers;
use Db\DbPdo;

class One /*extends DbPdo*/
{
    public function saveList($Data/*, $UserInfo*/)
    {
        //print_r($Data['get_data']);
        $Result = [
            "Data" => $Data,
            "Errors" => "",
            "Result" => false
        ];

        try {
            if ($Data['get_data'] == 'all') {

                $SelectIn = 'SELECT * FROM interface.physical_inputs WHERE "type" = :type';
                $SelectInParams = [
                    ":type" => 1
                ];

                $SelectOut = 'SELECT * FROM interface.physical_inputs WHERE "type" = :type';
                $SelectOutParams = [
                    ":type" => 2
                ];

                $SelectEth = 'SELECT * FROM interface.physical_inputs WHERE "type" = :type';
                $SelectEthParams = [
                    ":type" => 3
                ];

                $db = DbPdo::getInstance();
                $SelectResIn = $db->queryFetched($SelectIn, $SelectInParams);
                //print_r($SelectResIn);
                $SelectResOut = $db->queryFetched($SelectOut, $SelectOutParams);
                $SelectResEth = $db->queryFetched($SelectEth, $SelectEthParams);
                $Result['Result'] = [
                    'in' => $SelectResIn,
                    'out' => $SelectResOut,
                    'Eth' => $SelectResEth
                ];
                //$Result['Result']['out'] = $SelectResOut;
                //$Result['Result']['eth'] = $SelectResEth;
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
}