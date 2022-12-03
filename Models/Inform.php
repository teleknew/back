<?php

namespace Models;

use Remuxer\Remuxer;
use Helpers\Helpers;
use Sl\SLPairModel;

class Inform
{
    public function printInputDeviceList($Data/*, $UserInfo*/)
    {
        $Result = [
            "Data" => $Data,
            "Errors" => "",
            "Result" => false
        ];

        try {
            $inputDeviceList = (new Remuxer())->getInputDeviceList();

            $devices = [];

            foreach ($inputDeviceList->getList() as $inputDevice) {
                $devices[] = [
                    'name' => $inputDevice->getDisplayName(),
                    'settings' => json_decode($inputDevice->getSettings())
                ];
            }

            //print_r($devices);

            if (count($devices) > 0) {
                $Result["Result"] = $devices;
            }
        }
        catch(\Exception $e)
        {
            $Result['Errors'] = "Ошибка: {$e->getMessage()}.\n";
        }

        return $Result;

    }

    public function printOutputDeviceList($Data/*, $UserInfo*/)
    {
        $Result = [
            "Data" => $Data,
            "Errors" => "",
            "Result" => false
        ];

        try {
            $outputDeviceList = (new Remuxer())->getOutputDeviceList();

            $devices = [];

            foreach ($outputDeviceList->getList() as $outputDevice) {
                $devices[] = [
                    'name' => $outputDevice->getDisplayName(),
                    'settings' => json_decode($outputDevice->getSettings())
                ];

                //Helpers::get_pr(json_decode($outputDevice->serializeToJsonString()));
            }

            //print_r($devices);

            if (count($devices) > 0) {
                $Result["Result"] = $devices;
            }
        }
        catch(\Exception $e)
        {
            $Result['Errors'] = "Ошибка: {$e->getMessage()}.\n";
        }

        //Helpers::get_pr(json_decode($outputDevice->serializeToJsonString()));

        return $Result;

    }

    public function getListGraph($Data/*, $UserInfo*/)
    {
        $Result = [
            "Data" => $Data,
            "Errors" => "",
            "Result" => false
        ];

        try {
            $outputGraphs = (new Remuxer())->getGraphs();

            $graphs = [];

            foreach ($outputGraphs->getList() as $outputGraph) {
                //Helpers::get_pr($outputGraph->serializeToJsonString());
                $graphs[] = [
                    'name' => $outputGraph->getName(),
                    'guid' => $outputGraph->getGuid(),
                    'host' => $outputGraph->getHost(),
                    'port' => $outputGraph->getPort(),
                    'state' => $outputGraph->getState(),
                    'type' => $outputGraph->getType(),
                ];
            }

            //print_r($devices);

            if (count($graphs) > 0) {
                $Result["Result"] = $graphs;
            }
        }
        catch(\Exception $e)
        {
            $Result['Errors'] = "Ошибка: {$e->getMessage()}.\n";
        }

        return $Result;
    }

    public function getGraphInputDeviceList($Data/*, $UserInfo*/)
    {
        $Result = [
            "Data" => $Data,
            "Errors" => "",
            "Result" => false
        ];

        try {
            $graphInputDevice = (new Remuxer())->getGraphInputDevices($Data['guid']);

            $devices = [];

            foreach ($graphInputDevice->getList() as $inputDevice) {
                //Helpers::get_pr(json_decode($inputDevice->serializeToJsonString()));
                $inputDevice = json_decode($inputDevice->serializeToJsonString());
                $devices[] = [
                    'displayName' => $inputDevice->displayName,
                    'guid' => $inputDevice->guid,
                    'type' => $inputDevice->type,
                    'settings' => json_decode($inputDevice->settings),
                ];
            }

            //print_r($devices);

            if (count($devices) > 0) {
                $Result["Result"] = $devices;
            }
        }
        catch(\Exception $e)
        {
            $Result['Errors'] = "Ошибка: {$e->getMessage()}.\n";
        }

        return $Result;
    }

    public function getGraphInputDeviceProgramList($Data/*, $UserInfo*/)
    {
        $Result = [
            "Data" => $Data,
            "Errors" => "",
            "Result" => false
        ];

        try {

            for($i=0; $i<=10; $i++) {
                $graphInputDevicePrograms = (new Remuxer())->getInputProgramList($Data['graphGuid'], $Data['deviceGuid'], $Data['getRem']);

                $Result['Result']['stream']= json_decode($graphInputDevicePrograms->serializeToJsonString());

                //$Result['Result']['stream'] = json_decode((new SLPairModel())->serializeToJsonString());

                //Helpers::get_pr($Result['Result']['stream']->pat->pat->transportStreamId);

                $Result['Result']['streamCount'] = $i;

                if (!$Result['Result']['stream']->pat->pat->transportStreamId) {
                    //Helpers::get_pr("Объект пустой");
                    if($i==9){
                        throw new \Exception("ERROR: Не получили получили транспортный поток за 10 секунд" . $graphInputDevicePrograms->serializeToJsonString());
                    }

                } else {
                    //Helpers::get_pr("Объект полный");
                    break;
                }
                sleep(1);
            }
        }
        catch(\Exception $e)
        {
            $Result['Errors'] = "Ошибка с транспортным потоком!: {$e->getMessage()}.\n";
        }

        return $Result;
    }



    public function getGraphOutputDeviceList($Data/*, $UserInfo*/): array
    {
        $Result = [
            "Data" => $Data,
            "Errors" => "",
            "Result" => false
        ];

        try {
            $graphOutputDevice = (new Remuxer())->getGraphOutputDevices($Data['guid']);

            $devices = [];

            foreach ($graphOutputDevice->getList() as $outputDevice) {
                //Helpers::get_pr(json_decode($inputDevice->serializeToJsonString()));
                $outputDevice = json_decode($outputDevice->serializeToJsonString());
                $devices[] = [
                    'displayName' => $outputDevice->displayName,
                    'guid' => $outputDevice->guid,
                    'type' => $outputDevice->type,
                    'settings' => json_decode($outputDevice->settings),
                ];
            }

            //print_r($devices);

            if (count($devices) > 0) {
                $Result["Result"] = $devices;
            }
        }
        catch(\Exception $e)
        {
            $Result['Errors'] = "Ошибка: {$e->getMessage()}.\n";
        }

        return $Result;
    }

}