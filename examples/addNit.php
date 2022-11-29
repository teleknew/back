<?php

namespace Sl;

require "vendor/autoload.php";

// Табличка NIT из модели
$nit_model = new SLNitModelProto();

/**
 * Устанавливает новую NIT-таблицу для модели
 * @param string $deviceGuid GUID-устровка с которого берётся NIT
 * 
 */
function addNit(string $deviceGuid, SLInputNitProto $nit)
{
    global $nit_model;
    // Actual
    $nits = new SLNitsTsModelProto();
    foreach($nit->getActual()->getTransportStream()as $stream) {
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
    // Сформировали actual из входа. Добавляем в модель. Так же не уверен про PHP, но судя по документации как-то так
    $nit_model->getActual()[$deviceGuid] = $nits;
}