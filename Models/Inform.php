<?php

namespace Models;

use Remuxer\Remuxer;
use Helpers\Helpers;

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
                    'settings' => $inputDevice->getSettings()
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
                    'settings' => $outputDevice->getSettings()
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

}