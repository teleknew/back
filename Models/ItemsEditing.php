<?php

namespace Models;

use Remuxer\Remuxer;
use Helpers\Helpers;
use Models\Inform;
use Sl\SLNitsTsModelProto;
use Sl\SLModelProto;
use Sl\SLNitModelProto;
use Sl\SLPairModel;
use Sl\SLSdtModelProto;
use Sl\SLTdtModelProto;
use Sl\SLTotModelProto;
use Sl\SLSdtsSdsModel;

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
            /** проверяем создался граф или нет */
            for($i=0; $i < 10; $i++) {
                $newGraphResult = (new Remuxer())->getGraphName($Data['graphName']);
                if($newGraphResult->getState() == 1){
                    break;
                }
                else
                {
                    if($i == 9)
                        throw new \Exception("ERROR: Не получили guuid графа за 10 секунд" . $newGraphResult->serializeToJsonString());
                }
                sleep(1);
            }

            $Result['Result'] = [
                'graphName' => $newGraphResult->getName(),
                'graphType' => $newGraphResult->getType(),
                'graphGuid' => $newGraphResult->getGuid(),
                'graphHost' => $newGraphResult->getHost(),
                'graphPort' => $newGraphResult->getPort(),
                'graphState' => $newGraphResult->getState(),
                'graphCountI' => $i,
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
        //Helpers::get_pr($Data);
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

    public function addOutputRawToGraph($Data/*, $UserInfo*/)
    {
        $Result = [
            "Data" => $Data,
            "Errors" => "",
            "Result" => false
        ];
        try {
            $outputDevice = (new Remuxer())->getOutputDeviceList()->getList()[3];
            $param = json_decode($outputDevice->getSettings());
            //Helpers::get_pr($param);

            // тут присваиваем параметры
            $param[0]->params[1]->value = $Data['ip0'];
            $param[0]->params[2]->value = $Data['port'];
            $param[0]->params[3]->value = $Data['ip2'];

            $new_device = [];

            $param = json_encode($param);

            $outputDevice = $outputDevice->setSettings($param);
            //Helpers::get_pr($outputDevice->getSettings());
            /** временно коментируем этот блок начало */
            //$new_device = (new Remuxer())->addOutputDeviceToGraph($Data['graphGuid'], $outputDevice); // это в классе ремуксер

            //$settings = json_decode($new_device->getSettings());
            //Helpers::get_pr($settings);
            //$new_device = json_decode($new_device->serializeToJsonString());
            //Helpers::get_pr($new_device);
            //$new_device->settings = $settings;
            /** временно коментируем этот блок конец */

            $programList = (new Remuxer())->getInputProgramList($Data['graphGuid'],$Data['deviceGuid'],1);
            //Helpers::get_pr($programList->getNit()->serializeToJsonString());
            //Helpers::get_pr($programList->getNit());
            //Helpers::get_pr($programList->getNit()->getActual()->getVersionNumber());
            //Helpers::get_pr($programList->getNit()->getActual()->getNetworkId());
            //Helpers::get_pr($programList->getNit()->getActual()->getDescriptors()[0]->getNetworkNameDescriptor());
            //Helpers::get_pr($programList->getNit()->getActual()->getTransportStream()[0]->getDescriptors()[0]->getServiceListDescriptor()->getServices()[0]);

            foreach($programList->getNit()->getActual()->getTransportStream()[0]->getDescriptors()[0]->getServiceListDescriptor()->getServices() as $items)
            {
                //Helpers::get_pr($items->getServiceId());
                //Helpers::get_pr($items->getServiceType());
            }
            Helpers::get_pr($programList->serializeToJsonString());

            $nit = $programList->getNit();
            //print_r($nit->serializeToJsonString());

            $nits = new SLNitsTsModelProto();

            //$nits = new SLNitModelProto();

            //print_r($programList->getNit()->getActual()->getTransportStream());
            foreach ($programList->getNit()->getActual()->getTransportStream() as $stream){

                // src - источник
                $src = new SLPairModel();
                $src->setFirst($stream->getTransportStreamId());
                $src->setSecond($stream->getOriginalNetworkId());


                // Вроде у RepeatedField так пушатся элементы в PHP, у меня в JS делается через add
                $nits->getSrc()[] = $src;
                //$nits->setActual($src);
                //dst - то куда будет ремультиплексироваться, но так как просто нужно пронести как есть, то данные те же
                $dst = new SLPairModel();
                $dst->setFirst($stream->getTransportStreamId());
                $dst->setSecond($stream->getOriginalNetworkId());
                $nits->getDst()[] = $src;

                //Helpers::get_pr($stream->getTransportStreamId());
                //Helpers::get_pr($stream->getOriginalNetworkId());
                foreach ($stream->getDescriptors() as $descriptor){
                    //print_r($descriptor->getDescriptorTag());
                    //print_r($descriptor->getDescriptorLength());
                    //print_r($descriptor->getServiceListDescriptor());
                }

                //print_r($stream->serializeToJsonString());
            }

            //Helpers::get_pr('$nits');
            //Helpers::get_pr($nits);
            //Helpers::get_pr($nits->serializeToJsonString());

            $modelRemuxer = (new Remuxer())->getRemuxerModel($Data['graphGuid']);

            //Helpers::get_pr($modelRemuxer);
            //Helpers::get_pr($modelRemuxer->serializeToJsonString());
            //(new SLNitModelProto)->setActual($nits);

            $myNit = new SLNitModelProto;
            //Helpers::get_pr('myNit');
            $myNit->getActual()[$Data['deviceGuid']] = $nits;
            //$myNit->setActual([0 => $nits]);
            //print_r($myNit->getActual());

            $modelRemuxer->setNit($myNit);
            // Сформировали actual из входа. Добавляем в модель. Так же не уверен про PHP, но судя по документации как-то так
            //$nit_model->getActual()[$deviceGuid] = $nits;

            //Helpers::get_pr('modelRemuxer New');
            //print_r($modelRemuxer->serializeToJsonString());
            //print_r($modelRemuxer->getNit()->serializeToJsonString());
            //print_r($modelRemuxer->getNit());
            //print_r($modelRemuxer->getNit());
            //$modelRemuxer->setNit($nit);

            /** Прописываем TDT */
            $tdt = new SLTdtModelProto();
            $tdt->setInput($Data['deviceGuid']);
            $modelRemuxer->setTdt($tdt);

            /** Прописываем TOT */
            $tot = new SLTotModelProto();
            $tot->setInput($Data['deviceGuid']);
            $modelRemuxer->setTot($tot);

            /** Прописываем SDT Actual*/
            // src_dst - источник назначение //versionNumber - надо уточнить у Никиты, что брать
            foreach ($programList->getSdt()->getActual()->getSds() as $item){
                Helpers::get_pr($item->getServiceId());
                /** Вот это дорабатываем и не забыть про Other  */
            }
            $sdtSrc = $programList->getSdt()->getActual()->getVersionNumber();
            $src_dst = new SLPairModel();
            $src_dst->setFirst($sdtSrc);
            $src_dst->setSecond($sdtSrc);

            $actual = new SLSdtsSdsModel();
            $actual->getSrcDst()[] = $src_dst;

            $sdt = new SLSdtModelProto();
            $sdt->getActual()[$Data['deviceGuid']] = $actual;
            //$modelRemuxer->setSdt($sdt);

            /** Прописываем SDT Other*/
            // src_dst - источник назначение //versionNumber - надо уточнить у Никиты, что брать
            $sdtSrc = $programList->getSdt()->getOther()->getVersionNumber();
            $src_dst->setFirst($sdtSrc);
            $src_dst->setSecond($sdtSrc);

            $other = new SLSdtsSdsModel();
            $other->getSrcDst()[] = $src_dst;

            $sdt->getOther()[$Data['deviceGuid']] = $other;
            $modelRemuxer->setSdt($sdt);

            $Result['Result'] = json_decode($modelRemuxer->serializeToJsonString());
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