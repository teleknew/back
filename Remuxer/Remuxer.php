<?php

namespace Remuxer;

use Sl\SLDeviceListProto;
use Sl\SLEmptyProto;
use Sl\SLGraphListProto;
use Sl\SlGraphServiceProtoClient as protoClient;

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

}