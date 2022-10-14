<?php
///////
///
echo 'что-то выводит';
require_once $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

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
 * Возврщает список входных устройств Графа
 * @return sl_device_list_proto
 */
function getGraphInputDeviceList(protoClient $client, $graph): sl_device_list_proto
{
    list($response, $status) = $client->get_graph_input_device_list($graph)->wait();
    if ($status->code !== \Grpc\STATUS_OK) {
        echo "ERROR: " . $status->code . ", " . $status->details . PHP_EOL;
        exit(1);
    }
    return $response;
}

/**
 * Возврщает список входных программ конкретного устройства Графа
 * @return sl_input_program_list_proto
 */
function getInputProgramList(protoClient $client, sl_graph_proto $graph, sl_device_proto $device): sl_input_program_list_proto
{
    $graph_device = new sl_graph_device_proto();
    $graph_device->setGraph($graph);
    $graph_device->setDevice($device);
    list($response, $status) = $client->get_input_program_list($graph_device)->wait();
    if ($status->code !== \Grpc\STATUS_OK) {
        echo "ERROR: " . $status->code . ", " . $status->details . PHP_EOL;
        exit(1);
    }
    return $response;
}

/**
 * Возврщает список входных программ конкретного устройства Графа
 * @return sl_input_info_proto
 */
function getInputProgramListRemuxer(protoClient $client, sl_graph_proto $graph, sl_device_proto $device): sl_input_info_proto
{
    $graph_device = new sl_graph_device_proto();
    $graph_device->setGraph($graph);
    $graph_device->setDevice($device);
    list($response, $status) = $client->get_remuxer_input_info($graph_device)->wait();
    if ($status->code !== \Grpc\STATUS_OK) {
        echo "ERROR: " . $status->code . ", " . $status->details . PHP_EOL;
        exit(1);
    }
    return $response;
}


/**
 * Добавляет устройства в Граф
 * @return sl_device_list_proto
 */
function addInputDeviceToGraph(protoClient $client, sl_graph_proto $graph, sl_device_proto $inputDevice): sl_device_proto
{
    $graph_device = new sl_graph_device_proto();
    $graph_device->setGraph($graph);
    $graph_device->setDevice($inputDevice);
    list($response, $status) = $client->add_input_device_to_graph($graph_device)->wait();
    if ($status->code !== \Grpc\STATUS_OK) {
        echo "ERROR: " . $status->code . ", " . $status->details . PHP_EOL;
        exit(1);
    }
    return $response;
}

/**
 * Удаляем устройства из Графа
 * @return sl_device_list_proto
 */
function deleteInputDeviceFromGraph(protoClient $client, sl_graph_proto $graph, sl_device_proto $inputDevice): sl_empty_proto
{
    $graph_device = new sl_graph_device_proto();
    $graph_device->setGraph($graph);
    $graph_device->setDevice($inputDevice);
    list($response, $status) = $client->delete_input_device_from_graph($graph_device)->wait();
    if ($status->code !== \Grpc\STATUS_OK) {
        echo "ERROR: " . $status->code . ", " . $status->details . PHP_EOL;
        exit(1);
    }
    return $response;
}


/** смотрим какие бывают устройства начало */
$inputDeviceList = getInputDeviceList($client);

$count = 1;
foreach($inputDeviceList->getList() as $inputDevice) {
    echo $count++ . ") " . $inputDevice->getDisplayName() . PHP_EOL;
    //echo $inputDevice->getSettings() . PHP_EOL;
    //ini_set('memory_limit', '-1');
    //print_r($inputDevice);
    if ($count == 8) {
        //echo $inputDevice->getSettings() . PHP_EOL;
        echo '<pre>';
        print_r($param = json_decode($inputDevice->getSettings()));
        echo '</pre>';

        print_r($param[0]->params[0]->value='224.20.5.110');
        print_r("\n");
        print_r($param[0]->params[1]->value='8000');
        print_r("\n");
        print_r($param[0]->params[2]->value='10.10.1.211');

        $param = json_encode($param);
        echo "\n-------------------\n";
        //print_r($inputDevice->setSettings($param));
        $itDevice = $inputDevice->setSettings($param);


        echo '<pre>';
        echo "\n второй вывод - смотрим какие стали параметры\n";
        print_r($param = json_decode($inputDevice->getSettings()));
        echo '</pre>';

        //exit();
    }
}
/** смотрим какие бывают устройства конец */

/**
 * Возврает список Графов
 * @return sl_graph_list_proto
 */

/** Добавляем графы начало */
/*$newGraph = new sl_graph_proto();
$newGraph->setName('pioneer');
$newGraph->setType(1);*/

/*$newGraph = new sl_graph_proto();
$newGraph->setName('pioneer1');
$newGraph->setType(1);

list($response, $status) = $client->create_graph($newGraph)->wait();

$newGraph1 = new sl_graph_proto();
$newGraph1->setName('pioneer888');
$newGraph1->setType(1);

list($response, $status) = $client->create_graph($newGraph1)->wait();*/
/** Добавляем графы конец */

/** возвращаем список графов */
function getGraphs(protoClient $client): sl_graph_list_proto
{
    list($response, $status) = $client->get_graph_list(new sl_empty_proto())->wait();
    if ($status->code !== \Grpc\STATUS_OK) {
        echo "ERROR: " . $status->code . ", " . $status->details . PHP_EOL;
        exit(1);
    }
    return $response;
}

/** Вывод графов + получение объекта конкретного Графа*/
$graphs = getGraphs($client);
echo "\nГрафы: \n";
$count = 1;
foreach($graphs->getList() as $graph) {
    echo $count++ . ") " . $graph->getName() . PHP_EOL;
    if($graph->getName() == 'pioneer1'){
        $myGraph = $graph;
    }
}

/** Вывод данных объекта Граф */
print_r("\n--------- Вывод данных объекта Граф -----------\n");
print_r("\n");
print_r($myGraph->getName());
print_r("\n");
print_r($myGraph->getGuid());
print_r("\n");
print_r($myGraph->getState());
print_r("\n");
print_r($myGraph->getHost());
print_r("\n");
print_r($myGraph->getPort());
print_r("\n");
print_r($myGraph->getType());

$myGraphGuid = $myGraph->getGuid();

/** получение конкретного графа по Guid начало */
foreach($graphs->getList() as $graph1) {
    if($graph1->getGuid() == $myGraphGuid){
        $myGraph1 = $graph1;
        break;
    }
}

print_r("\n".$graph1->getGuid()."\n--------------------\n");
print_r($myGraphGuid."\n--------------------\n");
print_r($myGraph1->getName());
print_r("\n");
print_r($myGraph1->getGuid());
print_r("\n");
/** получение конкретного графа по Guid конец */

$graphDevice = getGraphInputDeviceList($client,$myGraph1);

echo "Входные устройства Графа сначала: \n";
$count = 1;
foreach($graphDevice->getList() as $inputDevice) {
    echo $count++ . ") " . $inputDevice->getDisplayName() . PHP_EOL;
    if($inputDevice->getDisplayName() == 'SL Network Source (Raw)'){
        $currentDevice = $inputDevice;
    }
}

echo '<pre>';
echo "\n Вывод последнего добавленного устройства \n";
print_r(json_decode($currentDevice->getSettings()));
echo '</pre>';

echo '<pre>';
echo "\n Вывод последнего добавленного JSON \n";
print_r($currentDevice->getSettings());
echo '</pre>';

print_r("\n--------\n");
print_r(gettype($currentDevice));
print_r("\n--------\n");
//print_r($inputDevice);

//addGraphInputDevice($client,$inputDevice);

/** добавляем девайс в граф начало*/
//$graph = current(getGraphs($client)->getList())[0];
//$device = current(getInputDeviceList($client)->getList())[6];
//$new_device = addInputDeviceToGraph($client, $myGraph1, $device);

/*echo '<pre>';
echo "\n вывод значений устройства 888888888\n";
print_r(json_decode($itDevice->getSettings()));
echo '</pre>';*/
/** добавляем девайс в граф начало*/

/** добавляем устройство в граф начало */
//$new_device = addInputDeviceToGraph($client, $myGraph1, $itDevice);
//echo $new_device->getDisplayName();
/** добавляем устройство конец */

/** удаляем устройства из графа */
//$del_device = deleteInputDeviceFromGraph($client, $myGraph1, $inputDevice);

/** удаляем конкретный граф начало */
$graphs = getGraphs($client);
foreach($graphs->getList() as $graph) {
    if($graph->getName() == 'pioneer888'){
        $delGraph = $graph;
        list($response, $status) = $client->delete_graph($delGraph)->wait();
    }
}

/** удаляем конкретный граф конец */

/** Выводим программы конкретного устройства графа начало для Декодера*/

/*$programsDevice = getInputProgramList($client,$myGraph1,$currentDevice);

echo "Входные программы Графа: \n";
$count = 1;
foreach($programsDevice->getList() as $programDevice) {
    echo $count++ . ") " . $programDevice->getDisplayName() . PHP_EOL;
}*/

/** Выводим данные конкретного устройства графа начало конец */

/** Выводим программы конкретного устройства графа начало для Ремуксера*/

$programs = getInputProgramListRemuxer($client,$myGraph1,$currentDevice);

print_r("\n--------\n");
print_r(gettype($programs));
print_r("\n--------\n");
print_r(get_class($programs));
print_r("\n--------\n");
//var_dump($programsDevice);

//ini_set("memory_limit", "2000M");
//print_r($programsDevice->getPat());
//print_r($programsDevice->getCat());
//print_r($programsDevice->getTot());
$count = 1;
/*foreach($programsDevice->getPat() as $programDevice) {
    print_r("\n--------\n");
    print_r(get_class($programDevice));
    print_r("\n--------\n");
    var_dump($programDevice);
    echo $count++ . ") " . $programDevice->getDescriptors() ." ".$programDevice->getVersionNumber(). PHP_EOL;
}*/

$programs = getInputProgramListRemuxer($client,$myGraph1,$currentDevice);
$programsDevice = $programs->getPat()->getPat();

print_r("\n--------\n");
print_r(get_class($programsDevice));
print_r("\n--------\n");

$programsMap = $programsDevice->getProgramMap();
$count = 1;

echo "Входные программы Графа Pat: \n";
echo "ProgramNumber MapPID" . PHP_EOL;
foreach ($programsMap as $programMap){
    echo $count++ . ") " . $programMap->getProgramNumber() ." ".$programMap->getMapPID(). PHP_EOL;
}

echo "TransportStreamId - " . $programsDevice->getTransportStreamId() . PHP_EOL;

echo "VersionNumber - " . $programsDevice->getVersionNumber() . PHP_EOL;

//var_dump($programsDevice->getVersionNumber());

/*print_r("\n--------\n");
print_r(get_class($programsDevice));
print_r("\n--------\n");
var_dump($programsDevice);*/
//echo $count++ . ") " . $programDevice->getDescriptors() ." ".$programDevice->getVersionNumber(). PHP_EOL;


/** Выводим данные конкретного устройства графа начало конец */

/** Еще делаем Cat, Tot, Tdt, Sdt, Nit, Eit. */

/** Еще делаем Cat */
print_r("\n--------\n");
echo "Входные программы Графа Cat: \n";
try {
    $getCatVersionNumber = $programs->getCat()->getVersionNumber();
    echo "Данные из функции getVersionNumber(): \n";
    var_dump($getCatVersionNumber);
}
catch(\Throwable $ex)
{
    print_r("Null для getVersionNumber()\n");
    var_dump($ex->getMessage());
}

print_r("\n--------\n");

try {
    $getCatDescriptors = $programs->getCat()->getDescriptors();
    echo "Данные из функции getDescriptors(): \n";
    var_dump($getCatDescriptors);
}
catch(\Throwable $ex)
{
    print_r("Null для getDescriptors()\n");
    var_dump($ex->getMessage());
}

print_r("\n--------\n");
echo "Входные программы Графа Tot: \n";

$d = new DateTime();
echo "Данные из функции getUTCTime(): \n";
print_r($d->setTimestamp($programs->getTot()->getUTCTime()));

$getTotDescriptors =  $programs->getTot()->getDescriptors();
echo "Данные из функции getDescriptors():";

print_r("\n--------\n");
print_r(get_class($programs->getTot()->getDescriptors()[0]));
print_r("\n--------");

echo "\nДанные из функции getDescriptorTag(): ";
print_r($programs->getTot()->getDescriptors()[0]->getDescriptorTag());
echo "\nДанные из функции getDescriptorLength(): ";
print_r($programs->getTot()->getDescriptors()[0]->getDescriptorLength());
echo "\nДанные из функции getUnknownDescriptor(): ";
print_r($programs->getTot()->getDescriptors()[0]->getUnknownDescriptor());
echo "\nДанные из функции getServiceDescriptor(): ";
print_r($programs->getTot()->getDescriptors()[0]->getServiceDescriptor());
echo "\nДанные из функции getNetworkNameDescriptor(): ";
print_r($programs->getTot()->getDescriptors()[0]->getNetworkNameDescriptor());
echo "\nДанные из функции getStreamIdentifierDescriptor(): ";
print_r($programs->getTot()->getDescriptors()[0]->getStreamIdentifierDescriptor());
echo "\nДанные из функции getTeletextDescriptor(): ";
print_r($programs->getTot()->getDescriptors()[0]->getTeletextDescriptor());
echo "\nДанные из функции getLocalTimeOffsetDescriptor(): ";
print_r("очень много вложенных объектов и массивоа в классе" . get_class($programs->getTot()->getDescriptors()[0]->getLocalTimeOffsetDescriptor()));
//print_r($programs->getTot()->getDescriptors()[0]->getLocalTimeOffsetDescriptor()->getLocalTimeOffset());
echo "\nДанные из функции getShortEventDescriptor(): ";
print_r($programs->getTot()->getDescriptors()[0]->getShortEventDescriptor());
echo "\nДанные из функции getExtendedEventDescriptor(): ";
print_r($programs->getTot()->getDescriptors()[0]->getExtendedEventDescriptor());
echo "\nДанные из функции getParentalRatingDescriptor(): ";
print_r($programs->getTot()->getDescriptors()[0]->getParentalRatingDescriptor());
echo "\nДанные из функции getServiceListDescriptor(): ";
print_r($programs->getTot()->getDescriptors()[0]->getServiceListDescriptor());
echo "\nДанные из функции getLogicalChannelDescriptor(): ";
print_r($programs->getTot()->getDescriptors()[0]->getLogicalChannelDescriptor());
echo "\nДанные из функции getData(): ";
print_r($programs->getTot()->getDescriptors()[0]->getData());

print_r("\n--------\n");
echo "Входные программы Графа Tdt:";
echo "\nДанные из функции getTdt(): ";
echo "\nДанные из функции getUTCTime: ";
print_r($d->setTimestamp($programs->getTdt()->getUTCTime()));

print_r("\n--------\n");
echo "Входные программы Графа getSdt: \n";
echo "\nДанные из функции getActual(): ";
echo "\nДанные из функции getVersionNumber(): ";
print_r($programs->getSdt()->getActual()->getVersionNumber());
echo "\nДанные из функции getTransportStreamId(): ";
print_r($programs->getSdt()->getActual()->getTransportStreamId());
echo "\nДанные из функции getOriginalNetworkId(): ";
print_r($programs->getSdt()->getActual()->getOriginalNetworkId());
echo "\nДанные из функции getSds(): ";
print_r("очень много вложенных объектов и массивоа в классе " . get_class($programs->getSdt()->getActual()->getSds()));
print_r("\n--------\n");
echo "\nДанные из функции getOther(): ";
echo "\nДанные из функции getSds(): ";
print_r("очень много вложенных объектов и массивоа в классе " . get_class($programs->getSdt()->getOther()));
print_r("\n--------\n");

print_r("\n--------\n");
echo "Входные программы Графа getNit: \n";
echo "\nДанные из функции getActual(): ";
echo "\nДанные из функции getVersionNumber(): ";
print_r($programs->getNit()->getActual()->getVersionNumber());
echo "\nДанные из функции getNetworkId(): ";
print_r($programs->getNit()->getActual()->getNetworkId());
echo "\nДанные из функции getDescriptors(): ";
print_r("очень много вложенных объектов и массивов в классе " . get_class($programs->getNit()->getActual()));
echo "\nДанные из функции getTransportStream(): ";
print_r("очень много вложенных объектов и массивов в классе " . get_class($programs->getNit()->getActual()));

echo "\nДанные из функции getOther(): ";
echo "\nДанные из функции getVersionNumber(): ";
try {
    $getNitOtherVersionNumber = $programs->getNit()->getOther()->getVersionNumber();
    echo "Данные из функции getDescriptors(): \n";
    var_dump($getNitOtherVersionNumber);
}
catch(\Throwable $ex)
{
    print_r("Null для getVersionNumber()\n");
    var_dump($ex->getMessage());
}

echo "\nДанные из функции getNetworkId(): ";
try {
    $getNitOtherNetworkId = $programs->getNit()->getOther()->getNetworkId();
    echo "Данные из функции getNetworkId(): \n";
    var_dump($getNitOtherNetworkId);
}
catch(\Throwable $ex)
{
    print_r("Null для getNetworkId()\n");
    var_dump($ex->getMessage());
}


echo "\nДанные из функции getDescriptors(): ";
try {
    $getNitOtherDescriptors = $programs->getNit()->getOther()->getDescriptors();
    echo "Данные из функции getDescriptors(): \n";
    var_dump($getNitOtherDescriptors);
}
catch(\Throwable $ex)
{
    print_r("Null для getDescriptors()\n");
    var_dump($ex->getMessage());
}
echo "\nДанные из функции getTransportStream(): ";
try {
    $getNitOtherTransportStream = $programs->getNit()->getOther()->getTransportStream();
    echo "Данные из функции getTransportStream(): \n";
    var_dump($getNitOtherTransportStream);
}
catch(\Throwable $ex)
{
    print_r("Null для getTransportStream()\n");
    var_dump($ex->getMessage());
}
print_r("\n--------\n");

print_r("\n--------\n");
echo "Входные программы Графа getEit: \n";
echo "\nДанные из функции getActual(): ";
echo "\nДанные из функции getVersionNumber(): ";
print_r($programs->getEit()->getActual()->getVersionNumber());
echo "\nДанные из функции getServiceId(): ";
print_r($programs->getEit()->getActual()->getServiceId());
echo "\nДанные из функции getTransportStreamId(): ";
print_r($programs->getEit()->getActual()->getTransportStreamId());
echo "\nДанные из функции getOriginalNetworkId(): ";
print_r($programs->getEit()->getActual()->getOriginalNetworkId());
echo "\nДанные из функции getEventInfo(): ";
print_r("очень много вложенных объектов и массивов в классе " . get_class($programs->getEit()->getActual()));

echo "\nДанные из функции getActualSchedule(): ";
echo "\nДанные из функции getVersionNumber(): ";
print_r($programs->getEit()->getActualSchedule()->getVersionNumber());
echo "\nДанные из функции getServiceId(): ";
print_r($programs->getEit()->getActualSchedule()->getServiceId());
echo "\nДанные из функции getTransportStreamId(): ";
print_r($programs->getEit()->getActualSchedule()->getTransportStreamId());
echo "\nДанные из функции getOriginalNetworkId(): ";
print_r($programs->getEit()->getActualSchedule()->getOriginalNetworkId());
echo "\nДанные из функции getEventInfo(): ";
print_r("очень много вложенных объектов и массивов в классе " . get_class($programs->getEit()->getActualSchedule()));

echo "\nДанные из функции getOther(): ";
echo "\nДанные из функции getVersionNumber(): ";
print_r($programs->getEit()->getOther()->getVersionNumber());
echo "\nДанные из функции getServiceId(): ";
print_r($programs->getEit()->getOther()->getServiceId());
echo "\nДанные из функции getTransportStreamId(): ";
print_r($programs->getEit()->getOther()->getTransportStreamId());
echo "\nДанные из функции getOriginalNetworkId(): ";
print_r($programs->getEit()->getOther()->getOriginalNetworkId());
echo "\nДанные из функции getEventInfo(): ";
print_r("очень много вложенных объектов и массивов в классе " . get_class($programs->getEit()->getOther()));

echo "\nДанные из функции getOtherSchedule(): ";
echo "\nДанные из функции getVersionNumber(): ";
print_r($programs->getEit()->getOtherSchedule()->getVersionNumber());
echo "\nДанные из функции getServiceId(): ";
print_r($programs->getEit()->getOtherSchedule()->getServiceId());
echo "\nДанные из функции getTransportStreamId(): ";
print_r($programs->getEit()->getOtherSchedule()->getTransportStreamId());
echo "\nДанные из функции getOriginalNetworkId(): ";
print_r($programs->getEit()->getOtherSchedule()->getOriginalNetworkId());
echo "\nДанные из функции getEventInfo(): ";
print_r("очень много вложенных объектов и массивов в классе " . get_class($programs->getEit()->getOtherSchedule()));
print_r("\n--------\n");

//var_dump($programs->getTot()->getDescriptors()[0]->getData());

/*print_r("\n--------\n");
print_r(get_class($programs));
print_r("\n--------\n");
print_r(get_class($programs->getTot()));
print_r("\n--------\n");
var_dump($programs->getTot()->getDescriptors());*/