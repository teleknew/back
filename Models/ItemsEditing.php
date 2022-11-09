<?php

namespace Models;

use Remuxer\Remuxer;
use Helpers\Helpers;

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

    /**
     * @throws \Exception
     */
    public function addInputRawToGraph($Data/*, $UserInfo*/)
    {
        $Result = [
            "Data" => $Data,
            "Errors" => "",
            "Result" => false
        ];
        try {
            $inputDevice = (new Remuxer())->getInputDeviceList()->getList()[6];
            $param = json_decode($inputDevice->getSettings());

            // тут присваиваем параметры
            $param[0]->params[0]->value = $Data['ip0'];
            $param[0]->params[1]->value = $Data['port'];
            $param[0]->params[2]->value = $Data['ip2'];

            $param = json_encode($param);

            $inputDevice = $inputDevice->setSettings($param);

            $new_device = (new Remuxer())->addInputDeviceToGraph($Data['graphGuid'], $inputDevice); // это в классе ремуксер

            $settings = json_decode($new_device->getSettings());
            //Helpers::get_pr($settings);
            $new_device = json_decode($new_device->serializeToJsonString());
            //Helpers::get_pr($new_device);
            $new_device->settings = $settings;

            $Result['Result'] = $new_device;
        }
        catch(\Exception $e)
        {
            $Result['Errors'] = "Ошибка: {$e->getMessage()}.\n";
        }

        return $Result;
    }

    /**
     * @throws \Exception
     */
    public function deleteInputDeviceFromGraph($Data/*, $UserInfo*/): array
    {
        $Result = [
            "Data" => $Data,
            "Errors" => "",
            "Result" => false
        ];
        try {
            $inputDevice = (new Remuxer())->deleteInputDeviceFromGraph($Data['graphGuid'], $Data['inputDeviceGuid']);
            $Result['Result'] = true;
        }
        catch(\Exception $e)
        {
            $Result['Errors'] = "Ошибка: {$e->getMessage()}.\n";
        }

        return $Result;
    }

}