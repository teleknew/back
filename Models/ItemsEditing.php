<?php

namespace Models;

use Remuxer\Remuxer;
use Helpers\Helpers;
use Sl\SLGraphProto;

class ItemsEditing
{
    public function createGraph($Data/*, $UserInfo*/): array
    {
        $Result = [
            "Data" => $Data,
            "Errors" => "",
            "Result" => false
        ];

        try {
            $newGraph = (new Remuxer())->creatGraph($Data['graphName'],$Data['graphType']);

            $newGraphResult = (new Remuxer())->getGraphName($Data['graphName']);

            $Result['Result'] = [
                'graphName' => $newGraphResult->getName(),
                'graphType' => $newGraphResult->getType(),
                'graphGuid' => $newGraphResult->getGuid(),
                'graphHost' => $newGraphResult->getHost(),
                'graphPort' => $newGraphResult->getPort(),
                'graphState' => $newGraphResult->getState(),
            ];
        }
        catch(\Exception $e)
        {
            $Result['Errors'] = "Ошибка: {$e->getMessage()}.\n";
        }

        return $Result;
    }

    public function deleteGraph($Data/*, $UserInfo*/): array
    {
        $Result = [
            "Data" => $Data,
            "Errors" => "",
            "Result" => false
        ];

        try {
            $deleteGraph = (new Remuxer())->deleteGraph($Data['graphGuid']);

            $Result['Result'] = true;
        }
        catch(\Exception $e)
        {
            $Result['Errors'] = "Ошибка: {$e->getMessage()}.\n";
        }

        return $Result;
    }

}