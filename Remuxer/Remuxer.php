<?php

namespace Remuxer;

use Sl\SLDeviceListProto;
use Sl\SLDeviceProto;
use Sl\SLEmptyProto;
use Sl\SLGraphDeviceProto;
use Sl\SLGraphListProto;
use Sl\SLGraphProto;
use Sl\SLGraphServiceProtoClient as protoClient;
use Sl\SLInputProgramListProto;
use Sl\SLModelProto;
use Sl\SLOutputProgramListProto;
use Sl\SLGraphInputProgramProto;
use Sl\SLGraphEncoderProto;

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

    /** получение конкретного графа по Name начало
     * или выкидываем исключение @throws \Exception
     */
    public function getGraphName($graphName)
    {
        $myGraph = false;
        foreach ($this->getGraphs()->getList() as $graph) {
            if ($graph->getName() == $graphName) {
                $myGraph = $graph;
                break;
            }
        }

        if(!$myGraph)
            throw new \Exception("ERROR: Нет Графа с таким Name " . $graphName);

        return $myGraph;
    }

    /**
     * Возврщает список входных устройств Графа
     * @return sl_device_list_proto
     * или выкидываем исключение @throws \Exception
     */
    public function getGraphInputDevices($graphGuid): SLDeviceListProto
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
    public function getGraphInputDevice($graphGuid, $deviceGuid)
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
    public function getInputProgramList($graphGuid, $deviceGuid, $getRem = 0)/*: SLInputProgramListProto*/
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

    /**
     * Возврщает список входных устройств Графа
     * @return sl_device_list_proto
     * или выкидываем исключение @throws \Exception
     */
    public function getGraphOutputDevices($graphGuid): SLDeviceListProto
    {
        /** получение конкретного графа по Guid начало */
        $myGraph = $this->getGraphGuid($graphGuid);

        list($response, $status) = $this->client->get_graph_output_device_list($myGraph)->wait();
        if ($status->code !== \Grpc\STATUS_OK) {
            throw new \Exception("ERROR: " . $status->code . ", " . $status->details);
        }
        return $response;
    }

    /** получение конкретного входного устройства (InputDevice) по Guid начало
     * или выкидываем исключение @throws \Exception
     */
    public function getGraphOutputDevice($graphGuid, $deviceGuid)
    {
        $currentDevice = false;
        $graphDevice= $this->getGraphOutputDevices($graphGuid);

        foreach ($graphDevice->getList() as $outputDevice) {
            if ($outputDevice->getGuid() == $deviceGuid) {
                $currentDevice = $outputDevice;
            }
        }

        if(!$currentDevice)
            throw new \Exception("ERROR: Нет устройства с Guid " . $deviceGuid . " D Графе Guid " . $graphGuid);

        return $currentDevice;
    }

    /**
     * Возврщает список входных устройств Графа
     * @return SLOutputProgramListProto
     * Возвращаем список программ выходного устройства
     * или выкидываем исключение @throws \Exception
     */
    public function getOutputProgramList($graphGuid, $inputProgramOrEncoder, $getRem = 0): SLOutputProgramListProto
    {
        if($getRem){
        $graph_device = new SLGraphInputProgramProto();
        $graph_device->setGraph($this->getGraphGuid($graphGuid));
        $graph_device->setInputProgram($inputProgramOrEncoder);
        list($response, $status) = $this->client->get_output_program_list_from_program($graph_device)->wait();
        }
        else{
        $graph_device = new SLGraphEncoderProto();
        $graph_device->setGraph($this->getGraphGuid($graphGuid));
        $graph_device->setEncoder($inputProgramOrEncoder);
        list($response, $status) = $this->client->get_output_program_list_from_encoder($graph_device)->wait();
        }
        if ($status->code !== \Grpc\STATUS_OK) {
            throw new \Exception("ERROR: " . $status->code . ", " . $status->details);
        }
        return $response;
    }

    /**
     * @throws \Exception
     */
    public function creatGraph($graphName, $graphType)
    {
        $newGraph = new SLGraphProto();
        $newGraph->setName($graphName);
        $newGraph->setType($graphType);
        list($response, $status) = $this->client->create_graph($newGraph)->wait();
        if ($status->code !== \Grpc\STATUS_OK) {
            throw new \Exception("ERROR: " . $status->code . ", " . $status->details);
        }
        return $response;
    }

    /**
     * @throws \Exception
     */
    public function deleteGraph($graphGuid)
    {
        $deleteGraph = (new Remuxer())->getGraphGuid($graphGuid);
        list($response, $status) = $this->client->delete_graph($deleteGraph)->wait();
        if ($status->code !== \Grpc\STATUS_OK) {
            throw new \Exception("ERROR: " . $status->code . ", " . $status->details);
        }
        return $response;
    }

    /**
     * Добавляет входное устройства в Граф
     * @return SLDeviceProto
     * @throws \Exception
     */

    public function addInputDeviceToGraph($graphGuid, SLDeviceProto $inputDevice): SLDeviceProto
    {
        $graph = $this->getGraphGuid($graphGuid);
        $graph_device = new SLGraphDeviceProto();
        $graph_device->setGraph($graph);
        $graph_device->setDevice($inputDevice);
        list($response, $status) = $this->client->add_input_device_to_graph($graph_device)->wait();
        if ($status->code !== \Grpc\STATUS_OK) {
            throw new \Exception("ERROR: " . $status->code . ", " . $status->details);
        }
        return $response;
    }

        /**
         * Добавляет выходное устройства в Граф
         * @return SLDeviceProto
         * @throws \Exception
         */

    public function addOutputDeviceToGraph($graphGuid, SLDeviceProto $inputDevice): SLDeviceProto
    {
        $graph = $this->getGraphGuid($graphGuid);
        $graph_device = new SLGraphDeviceProto();
        $graph_device->setGraph($graph);
        $graph_device->setDevice($inputDevice);
        list($response, $status) = $this->client->add_output_device_to_graph($graph_device)->wait();
        if ($status->code !== \Grpc\STATUS_OK) {
            throw new \Exception("ERROR: " . $status->code . ", " . $status->details);
        }
        return $response;
    }

    /**
     * Удаляем устройства из Графа
     * @return SLDeviceListProto
     * @throws \Exception
     */
    public function deleteInputDeviceFromGraph($graphGuid, $inputDeviceGuid): SLEmptyProto
    {
        $graph = $this->getGraphGuid($graphGuid);
        $inputDevice = $this->getGraphInputDevice($graphGuid, $inputDeviceGuid);
        $graph_device = new SLGraphDeviceProto();
        $graph_device->setGraph($graph);
        $graph_device->setDevice($inputDevice);
        list($response, $status) = $this->client->delete_input_device_from_graph($graph_device)->wait();
        if ($status->code !== \Grpc\STATUS_OK) {
            throw new \Exception("ERROR: " . $status->code . ", " . $status->details);
        }
        return $response;
    }



    /**
     * Возврщает что-то Графа
     * @return
     * или выкидываем исключение @throws \Exception
     */
    public function getRemuxerModel($graphGuid): SLModelProto
    {
        /** получение конкретного графа по Guid начало */
        $myGraph = $this->getGraphGuid($graphGuid);

        list($response, $status) = $this->client->get_remuxer_model($myGraph)->wait();
        if ($status->code !== \Grpc\STATUS_OK) {
            throw new \Exception("ERROR: " . $status->code . ", " . $status->details);
        }
        return $response;
    }

    /**
     * Возврщает что-то Графа
     * @return
     * или выкидываем исключение @throws \Exception
     */
    public function setRemuxerModel($modelRemuxer)
    {
        /** получение конкретного графа по Guid начало */
        //$myGraph = $this->getGraphGuid($graphGuid);

        list($response, $status) = $this->client->set_remuxer_model($modelRemuxer)->wait();
        if ($status->code !== \Grpc\STATUS_OK) {
            throw new \Exception("ERROR: " . $status->code . ", " . $status->details);
        }
        return $response;
    }

    /**
     * Возврщает что-то Графа
     * @return
     * или выкидываем исключение @throws \Exception
     */

    public function graphStart($graphGuid)
    {
        /** получение конкретного графа по Guid начало */
        $myGraph = $this->getGraphGuid($graphGuid);
        list($response, $status) = $this->client->start_graph($myGraph)->wait();
        if ($status->code !== \Grpc\STATUS_OK) {
            throw new \Exception("ERROR: " . $status->code . ", " . $status->details);
        }
        return $response;
    }

    /**
     * Возврщает что-то Графа
     * @return
     * или выкидываем исключение @throws \Exception
     */

    public function getGraphLog($graphGuid)
    {
        /** получение конкретного графа по Guid начало */
        $myGraph = $this->getGraphGuid($graphGuid);
        list($response, $status) = $this->client->get_graph_log($myGraph)->wait();
        if ($status->code !== \Grpc\STATUS_OK) {
            throw new \Exception("ERROR: " . $status->code . ", " . $status->details);
        }
        return $response;
    }

    /**
     * Возврщает что-то Графа
     * @return
     * или выкидываем исключение @throws \Exception
     */

    public function stopGraph($graphGuid)
    {
        /** получение конкретного графа по Guid начало */
        $myGraph = $this->getGraphGuid($graphGuid);
        list($response, $status) = $this->client->stop_graph($myGraph)->wait();
        if ($status->code !== \Grpc\STATUS_OK) {
            throw new \Exception("ERROR: " . $status->code . ", " . $status->details);
        }
        return $response;
    }

    /**
     * Возврщает что-то Графа
     * @return
     * или выкидываем исключение @throws \Exception
     */

    public function getRemuxerStatistics($graphGuid)
    {
        /** получение конкретного графа по Guid начало */
        $myGraph = $this->getGraphGuid($graphGuid);
        list($response, $status) = $this->client->get_remuxer_statistics($myGraph)->wait();
        if ($status->code !== \Grpc\STATUS_OK) {
            throw new \Exception("ERROR: " . $status->code . ", " . $status->details);
        }
        return $response;
    }

}