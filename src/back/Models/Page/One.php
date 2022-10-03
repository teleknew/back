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

                $SelectType = 'SELECT * FROM interface.type_physical_inputs WHERE id > :id';
                $SelectTypeParams = [
                    ":id" => 0
                ];

                $db = DbPdo::getInstance();
                $SelectResTypes = $db->queryFetched($SelectType, $SelectTypeParams);

                $Result['Result'] = [];

                foreach($SelectResTypes as $SelectResType){

                    $Select = 'SELECT * FROM interface.physical_inputs WHERE "type" = :type';
                    $SelectParams = [
                        ":type" => $SelectResType['id']
                    ];

                    $SelectRes = $db->queryFetched($Select, $SelectParams);

                    $Result['Result'][] = [
                      'id' => $SelectResType['id'],
                      'description' => $SelectResType['description'],
                      'ports' => $SelectRes
                    ];
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
}