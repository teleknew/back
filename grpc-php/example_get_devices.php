<?php

require "vendor/autoload.php";

use sl_graph_service_protoClient as protoClient;

/**
 * IP-адрес хоста gRPC-сервиса
 */
define("HOST_IP", "172.30.1.211");

/**
 * Порт хоста gRPC-сервиса (не исправлять)
 */
define("HOST_PORT", 54434);

/**
 * Клиент для работы с gRPC-сервисом
 */
$client = new protoClient(HOST_IP . ":" . HOST_PORT, [
    'credentials' => \Grpc\ChannelCredentials::createInsecure(),
]);
/**
 * Возврает список входных устройств
 * @return sl_device_list_proto
 */
function getInputDeviceList(protoClient $client): sl_device_list_proto
{
    list($response, $status) = $client->get_input_device_list(new sl_empty_proto())->wait();
    if ($status->code !== \Grpc\STATUS_OK) {
        echo "ERROR: " . $status->code . ", " . $status->details . PHP_EOL;
        exit(1);
    }
    return $response;
}

/**
 * Возврает список выходных устройств
 * @return sl_device_list_proto
 */
function getOutputDeviceList(protoClient $client): sl_device_list_proto
{
    list($response, $status) = $client->get_output_device_list(new sl_empty_proto())->wait();
    if ($status->code !== \Grpc\STATUS_OK) {
        echo "ERROR: " . $status->code . ", " . $status->details . PHP_EOL;
        exit(1);
    }
    return $response;
}

// Получаем входных устройства и выводим их
$inputDeviceList = getInputDeviceList($client);
echo "Входные устройства: \n";
$count = 1;
foreach($inputDeviceList->getList() as $inputDevice) {
    echo $count++ . ") " . $inputDevice->getDisplayName() . PHP_EOL;
}

// Получаем выходные устройства и выводим их
$outputDeviceList = getInputDeviceList($client);
echo "\nВыходные устройства: \n";
$count = 1;
foreach($outputDeviceList->getList() as $outputDevice) {
    echo $count++ . ") " . $outputDevice->getDisplayName() . PHP_EOL;
}
