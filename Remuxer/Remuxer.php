<?php

namespace Remuxer;

use Sl\SLDeviceListProto;
use Sl\SLEmptyProto;
use Sl\SLGraphDeviceProto;
use Sl\SLGraphListProto;
use Sl\SlGraphServiceProtoClient as protoClient;
use Sl\SLInputProgramListProto;

class Remuxer
{
    public $HOST_IP = "172.30.1.211";
    /**
     * Порт хоста gRPC-сервиса (не исправлять)
     */
    private $HOST_PORT = 54434;
    public $client;

    public function __construct(){
        $this->client = new protoClient($this->HOST_IP . ":" . $this->HOST_PORT, [
            'credentials' => \Grpc\ChannelCredentials::createInsecure(),
        ]);

    }

    /**
     * Возврает список входных устройств
     * @return SLDeviceListProto
     * @throws \Exception
     */
    public function getInputDeviceList(): SLDeviceListProto
    {
        list($response, $status) = $this->client->get_input_device_list(new SLEmptyProto())->wait();
        if ($status->code !== \Grpc\STATUS_OK) {
            throw new \Exception("ERROR: " . $status->code . ", " . $status->details);
        }
        return $response;
    }

    /**
     * Возврает список выходных устройств
     * @return SLDeviceListProto
     * @throws \Exception
     */
    public function getOutputDeviceList(): SLDeviceListProto
    {
        list($response, $status) = $this->client->get_output_device_list(new SLEmptyProto())->wait();
        if ($status->code !== \Grpc\STATUS_OK) {
            throw new \Exception("ERROR: " . $status->code . ", " . $status->details);
        }
        return $response;
    }

    /** возвращаем список графов
     * или выкидываем исключение @throws \Exception
     */
    public function getGraphs(): SLGraphListProto
    {
        list($response, $status) = $this->client->get_graph_list(new SLEmptyProto())->wait();
        if ($status->code !== \Grpc\STATUS_OK) {
            throw new \Exception("ERROR: " . $status->code . ", " . $status->details);
        }
        return $response;
    }

    /** получение конкретного графа по Guid начало
     * или выкидываем исключение @throws \Exception
     */
    public function getGraphGuid($graphGuid)
    {
        $myGraph = false;
        foreach ($this->getGraphs()->getList() as $graph) {
            if ($graph->getGuid() == $graphGuid) {
                $myGraph = $graph;
                break;
            }
        }

        if(!$myGraph)
            throw new \Exception("ERROR: Нет Графа с таким Guid " . $graphGuid);

        return $myGraph;
    }

    /**
     * Возврщает список входных устройств Графа
     * @return sl_device_list_proto
     * или выкидываем исключение @throws \Exception
     */
    function getGraphInputDevices($graphGuid): SLDeviceListProto
    {
        /** получение конкретного графа по Guid начало */
        $myGraph = $this->getGraphGuid($graphGuid);

        list($response, $status) = $this->client->get_graph_input_device_list($myGraph)->wait();
        if ($status->code !== \Grpc\STATUS_OK) {
            throw new \Exception("ERROR: " . $status->code . ", " . $status->details);
        }
        return $response;
    }

    /** получение конкретного входного устройства (InputDevice) по Guid начало
     * или выкидываем исключение @throws \Exception
     */
    function getGraphInputDevice($graphGuid, $deviceGuid)
    {
        $currentDevice = false;
        $graphDevice= $this->getGraphInputDevices($graphGuid);

        foreach ($graphDevice->getList() as $inputDevice) {
            if ($inputDevice->getGuid() == $deviceGuid) {
                $currentDevice = $inputDevice;
            }
        }

        if(!$currentDevice)
            throw new \Exception("ERROR: Нет устройства с Guid " . $deviceGuid . " D Графе Guid " . $graphGuid);

        return $currentDevice;
    }

    /**
     * Возвращаем список программ входного устройства
     * или выкидываем исключение @throws \Exception
     */
    function getInputProgramList($graphGuid, $deviceGuid, $getRem = 0): SLInputProgramListProto
    {
        $graph_device = new SLGraphDeviceProto();
        $graph_device->setGraph($this->getGraphGuid($graphGuid));
        $graph_device->setDevice($this->getGraphInputDevice($graphGuid, $deviceGuid));
        if($getRem){
            list($response, $status) = $this->client->get_remuxer_input_info($graph_device)->wait();
        }
        else{
            list($response, $status) = $this->client->get_input_program_list($graph_device)->wait();
        }
        if ($status->code !== \Grpc\STATUS_OK) {
            throw new \Exception("ERROR: " . $status->code . ", " . $status->details);
        }
        return $response;
    }

}