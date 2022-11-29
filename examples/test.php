<?php

/** Это функция из моего класса Remuxer начало**/

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

/** Это функция из моего класса Remuxer конец**/

$nits = new SLNitsTsModelProto();

foreach ($programList->getNit()->getActual()->getTransportStream() as $stream){

    // src - источник
    $src = new SLPairModel();
    $src->setFirst($stream->getTransportStreamId());
    $src->setFirst($stream->getOriginalNetworkId());
    // Вроде у RepeatedField так пушатся элементы в PHP, у меня в JS делается через add
    $nits->getSrc()[] = $src;
    //dst - то куда будет ремультиплексироваться, но так как просто нужно пронести как есть, то данные те же
    $dst = new SLPairModel();
    $dst->setFirst($stream->getTransportStreamId());
    $dst->setFirst($stream->getOriginalNetworkId());
    $nits->getDst()[] = $src;
}

$modelRemuxer = (new Remuxer())->getRemuxerModel($Data['graphGuid']); // этот кусок сверху описан

$myNit = new SLNitModelProto;
$myNit->setActual($nits);
/** вот тут ошибка PHP Fatal error:  Sl\SLNitModelProto::setActual(): Must be a map
 * in /var/www/html/sl_proto/Sl/SLNitModelProto.php on line 57"
 */

$modelRemuxer->setNit($myNit);