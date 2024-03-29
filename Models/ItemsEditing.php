<?php

namespace Models;

use Sl\SLGraphRemuxerModelProto;
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
use Sl\SLPatModelProto;
use Sl\SLPmtsModelProto;
use Sl\SLPmtModelProto;
use Sl\SLPmtProto;
use Sl\SLReserveStateProto;

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

            $new_device = (new Remuxer())->addOutputDeviceToGraph($Data['graphGuid'], $outputDevice); // это в классе ремуксер

            //$settings = json_decode($new_device->getSettings());
            //Helpers::get_pr($settings);
            $Result['Result'] = json_decode($new_device->serializeToJsonString());
            //Helpers::get_pr(json_decode($Result['Result']->settings));
            $Result['Result']->settings = json_decode($Result['Result']->settings);
            //Helpers::get_pr($new_device);
            //$new_device->settings = $settings;
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

    public function loadModelRemuxer($Data/*, $UserInfo*/)
    {
        $Result = [
            "Data" => $Data,
            "Errors" => "",
            "Result" => false
        ];
        try {

            //Helpers::get_pr($Data['inputDevices'][0]);

            /** Что Должно получится смотрим в моем json готовом
             *
             * и в принципе никита тоже прислал готовый json
             *
             */
            //Helpers::get_pr($Data);
            //Helpers::get_pr($Data['nit']);

            //$programList = (new Remuxer())->getInputProgramList($Data['graphGuid'],$Data['deviceGuid'],1);
            //Helpers::get_pr($programList->getNit()->serializeToJsonString());
            //Helpers::get_pr($programList->getNit());
            //Helpers::get_pr($programList->getNit()->getActual()->getVersionNumber());
            //Helpers::get_pr($programList->getNit()->getActual()->getNetworkId());
            //Helpers::get_pr($programList->getNit()->getActual()->getDescriptors()[0]->getNetworkNameDescriptor());
            //Helpers::get_pr($programList->getNit()->getActual()->getTransportStream()[0]->getDescriptors()[0]->getServiceListDescriptor()->getServices()[0]);

            $nits = new SLNitsTsModelProto();

            //$nits = new SLNitModelProto();

            //print_r($programList->getNit()->getActual()->getTransportStream());
            //foreach ($programList->getNit()->getActual()->getTransportStream() as $stream)
            foreach ($Data['nit']['actual'] as $stream)
            {
                ///Helpers::get_pr('шо тут');
                //Helpers::get_pr(key($Data['nit']['actual']));
                //Helpers::get_pr('шо тут');
                //Helpers::get_pr($stream);

                foreach ($stream['src'] as $itemNit) {
                    // src - источник
                    $src = new SLPairModel();
                    $src->setFirst($itemNit['first']);
                    $src->setSecond($itemNit['second']);


                    // Вроде у RepeatedField так пушатся элементы в PHP, у меня в JS делается через add
                    $nits->getSrc()[] = $src;
                }

                //Helpers::get_pr('$nits');
                //Helpers::get_pr($nits->serializeToJsonString());

                //$nits->setActual($src);
                //dst - то куда будет ремультиплексироваться, но так как просто нужно пронести как есть, то данные те же

                foreach ($stream['dst'] as $itemNit) {
                    $dst = new SLPairModel();
                    $dst->setFirst($itemNit['first']);
                    $dst->setSecond($itemNit['second']);
                    $nits->getDst()[] = $dst;
                }

                //Helpers::get_pr($stream->getTransportStreamId());
                //Helpers::get_pr($stream->getOriginalNetworkId());
                //foreach ($stream->getDescriptors() as $descriptor){
                //print_r($descriptor->getDescriptorTag());
                //print_r($descriptor->getDescriptorLength());
                //print_r($descriptor->getServiceListDescriptor());
                //}

                //print_r($stream->serializeToJsonString());
            }

            //Helpers::get_pr($nits);
            //Helpers::get_pr($nits->serializeToJsonString());



            $modelRemuxer = (new Remuxer())->getRemuxerModel($Data['graphGuid']);
            //$modelClearRemuxer = (new Remuxer())->getRemuxerModel('84ef501a-5030-4350-89df-75b7df780a79');
            //Helpers::get_pr($modelRemuxer);
            //Helpers::get_pr("modelRemuxer Пробуем модель прочитать");
            //Helpers::get_pr($modelRemuxer->serializeToJsonString());
            //Helpers::get_pr("modelClearRemuxer Пробуем модель прочитать");
            //Helpers::get_pr($modelClearRemuxer->serializeToJsonString());
            //(new SLNitModelProto)->setActual($nits);

            $myNit = new SLNitModelProto;
            //Helpers::get_pr('myNit');
            //$myNit->getActual()[$Data['deviceGuid']] = $nits;
            $myNit->getActual()[$Data['inputDevices'][0]] = $nits;

            //Helpers::get_pr('myNit');
            //Helpers::get_pr($myNit->serializeToJsonString());

            $modelRemuxer->setNit($myNit);
            // Сформировали actual из входа. Добавляем в модель. Так же не уверен про PHP, но судя по документации как-то так
            //$nit_model->getActual()[$deviceGuid] = $nits;

            //Helpers::get_pr('modelRemuxer New');
            //print_r($modelRemuxer->serializeToJsonString());
            //print_r($modelRemuxer->getNit()->serializeToJsonString());
            //print_r($modelRemuxer->getNit());
            //print_r($modelRemuxer->getNit());
            //$modelRemuxer->setNit($nit);


            /** добавляем PAT->PMT */
            $pat = new SLPatModelProto();
            $pmts = new SLPmtsModelProto();
            $i=0;

            //Helpers::get_pr($Data['pat']);

            //foreach ($programList->getPat()->getPmt() as $item)
            foreach ($Data['pat']['inputs'] as $pm)
            {
                foreach ($pm['pmts'] as $item) {
                    //Helpers::get_pr($item);

                    $pmt = new SLPmtModelProto();
                    $src = new SLPairModel();
                    $src->setFirst($item['src']['first']);
                    $src->setSecond($item['src']['second']);
                    $pmt->setSrc($src);

                    $dst = new SLPairModel();
                    $dst->setFirst($item['dst']['first']);
                    $dst->setSecond($item['dst']['second']);
                    $pmt->setDst($dst);

                    //$pmt->setReserve(SLReserveStateProto::sl_normal); //уточнить у Никиты
                    //$pmt->setReserve(1); //уточнить у Никиты
                    //$pmt->setStatus(1);  //уточнить у Никиты

                    $pidPmt = [];
                    //foreach ($item->getStreamMap() as $pid)
                    foreach ($item['streams'] as $key=>$pid)
                    {

                        //Helpers::get_pr($pid->getElementaryPID());
                        //$pidPmt[$pid->getElementaryPID()] = $pid->getElementaryPID();
                        $pidPmt[$key] = $pid;

                    }

                    $pmt->setStreams($pidPmt);

                    $pmt->setAutoToReserve(1);

                    $pmts->getPmts()[] = $pmt;

                    //if($i=2)
                    // break;
                    $i++;
                }
            }

            //$pat->setInputs([$Data['deviceGuid'] => $pmts]);
            $pat->setInputs([$Data['inputDevices'][0] => $pmts]);

            $modelRemuxer->setPat($pat);

            //Helpers::get_pr("pat");
            //Helpers::get_pr($pat->serializeToJsonString());

            /** Прописываем SDT Actual*/
            // src_dst - источник назначение
            $actual = new SLSdtsSdsModel();
            //foreach ($programList->getSdt()->getActual()->getSds() as $item)
            foreach ($Data['sdt']['actual'] as $sd) {
                foreach ($sd['srcDst'] as $item) {
                    //$sdtSrc = $item->getServiceId();
                    $src_dst = new SLPairModel();
                    $src_dst->setFirst($item['first']);
                    $src_dst->setSecond($item['second']);
                    $actual->getSrcDst()[] = $src_dst;
                }
            }

            $sdt = new SLSdtModelProto();
            $sdt->getActual()[$Data['inputDevices'][0]] = $actual;
            //$modelRemuxer->setSdt($sdt);

            /** Прописываем SDT Other*/
            // src_dst - источник назначение
            $other = new SLSdtsSdsModel();
            //foreach($programList->getSdt()->getOther()->getSds() as $item)
            foreach ($Data['sdt']['other'] as $sd) {
                foreach ($sd['srcDst'] as $item) {
                    //$sdtSrc = $item->getServiceId();
                    $src_dst = new SLPairModel();
                    $src_dst->setFirst($item['first']);
                    $src_dst->setSecond($item['second']);
                    $other->getSrcDst()[] = $src_dst;
                }
            }

            $sdt->getOther()[$Data['inputDevices'][0]] = $other;
            $modelRemuxer->setSdt($sdt);

            /** Прописываем TDT */
            $tdt = new SLTdtModelProto();
            $tdt->setInput($Data['inputDevices'][0]);
            $modelRemuxer->setTdt($tdt);

            /** Прописываем TOT */
            $tot = new SLTotModelProto();
            $tot->setInput($Data['inputDevices'][0]);
            $modelRemuxer->setTot($tot);

            //Helpers::get_pr($modelRemuxer->serializeToJsonString());


            $graphRemuxerModelProto = new SLGraphRemuxerModelProto();

            $graph = (new Remuxer())->getGraphGuid($Data['graphGuid']);
            $graphRemuxerModelProto->setGraph($graph);
            //$graphRemuxerModelProto->setModel($modelClearRemuxer);
            //$itog = (new Remuxer())->setRemuxerModel($graphRemuxerModelProto);

            $graphRemuxerModelProto->setModel($modelRemuxer);

            //Helpers::get_pr("Пытаюсь загрузить modelRemuxer");
            //Helpers::get_pr($modelRemuxer->serializeToJsonString());
            //Helpers::get_pr($graphRemuxerModelProto->serializeToJsonString());

            $itog = (new Remuxer())->setRemuxerModel($graphRemuxerModelProto);

            //Helpers::get_pr($itog->serializeToJsonString());

            //$start = (new Remuxer())->graphStart($Data['graphGuid']);

            //Helpers::get_pr($start);

            //$stop = (new Remuxer())->stopGraph($Data['graphGuid']);

            //Helpers::get_pr($stop);

            //$graphLog = (new Remuxer())->getGraphLog($Data['graphGuid']);

            //Helpers::get_pr(json_decode($graphLog->serializeToJsonString()));

            /** Тут две строчки про статистику  **/
            //$getRemuxerStatistics = (new Remuxer())->getRemuxerStatistics($Data['graphGuid']);

            //rpc get_device_statistics(SLGraphDeviceProto) returns (SLStatisticsProto) {}


            //Helpers::get_pr($getRemuxerStatistics->serializeToJsonString());


            $Result['Result']["graph"] = json_decode($graph->serializeToJsonString());
            $Result['Result']["model"] = json_decode($itog->serializeToJsonString());
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

    public function loadMultiModelRemuxer($Data/*, $UserInfo*/)
    {
        $Result = [
            "Data" => $Data,
            "Errors" => "",
            "Result" => false
        ];
        try {

            $modelRemuxer = (new Remuxer())->getRemuxerModel($Data['graphGuid']);

            /** добавляем PAT->PMT */
            $pat = new SLPatModelProto();

            $i=0;

            foreach ($Data['pat']['inputsMap'] as $myPat)
            {
                //Helpers::get_pr($myPat[0]);
                $pmts = new SLPmtsModelProto();
                foreach ($myPat[1]['pmtsList'] as $item) {

                    $pmt = new SLPmtModelProto();
                    $src = new SLPairModel();
                    $src->setFirst($item['src']['first']);
                    $src->setSecond($item['src']['second']);
                    $pmt->setSrc($src);

                    $dst = new SLPairModel();
                    $dst->setFirst($item['dst']['first']);
                    $dst->setSecond($item['dst']['second']);
                    $pmt->setDst($dst);

                    /** Если вдруг не буду работать status, reserv, autoReserv */
                    
                    //$pmt->setReserve(SLReserveStateProto::sl_normal); //уточнить у Никиты
                    //$pmt->setReserve(1); //уточнить у Никиты
                    //$pmt->setStatus(1);  //уточнить у Никиты

                    $pidPmt = [];

                    foreach ($item['streamsMap'] as $pid)
                    {
                        $pidPmt[$pid[0]] = $pid[1];
                    }

                    $pmt->setReserve($item['reserve']);

                    $pmt->setStatus($item['status']);

                    //Helpers::get_pr($pidPmt);

                    $pmt->setStreams($pidPmt);

                    $pmt->setAutoToReserve($item['autoToReserve']);

                    $pmts->getPmts()[] = $pmt;

                }
                $pat->getInputs()[$myPat[0]] = $pmts;
            }

            $modelRemuxer->setPat($pat);

            /** Прописываем TDT */
            $tdt = new SLTdtModelProto();
            $tdt->setInput($Data['inputDevices'][0]);
            $modelRemuxer->setTdt($tdt);

            /** Прописываем TOT */
            $tot = new SLTotModelProto();
            $tot->setInput($Data['inputDevices'][0]);
            $modelRemuxer->setTot($tot);

            /** Прописываем SDT Actual*/
            $sdt = new SLSdtModelProto();
            // src_dst - источник назначение
            foreach ($Data['sdt']['actualMap'] as $act) {
                $actual = new SLSdtsSdsModel();
                foreach ($act as $key=>$sd) {
                    //Helpers::get_pr($key);
                    //Helpers::get_pr($sd);
                    foreach ($sd['srcDst'] as $item) {
                        //$sdtSrc = $item->getServiceId();
                        $src_dst = new SLPairModel();
                        $src_dst->setFirst($item['first']);
                        $src_dst->setSecond($item['second']);
                        $actual->getSrcDst()[] = $src_dst;
                    }
                    $sdt->getActual()[$key] = $actual;
                }
            }
            //$modelRemuxer->setSdt($sdt);

            /** Прописываем SDT Other*/
            // src_dst - источник назначение
            foreach ($Data['sdt']['otherMap'] as $oth) {
                $other = new SLSdtsSdsModel();
                foreach ($oth as $key=>$sd) {
                    foreach ($sd['srcDst'] as $item) {
                        //$sdtSrc = $item->getServiceId();
                        $src_dst = new SLPairModel();
                        $src_dst->setFirst($item['first']);
                        $src_dst->setSecond($item['second']);
                        $other->getSrcDst()[] = $src_dst;
                    }
                    $sdt->getOther()[$key] = $other;
                }
            }

            $modelRemuxer->setSdt($sdt);

            /** Прописываем NIT Actual*/

            $myNit = new SLNitModelProto;
            foreach ($Data['nit']['actualMap'] as $act) {

                $nits = new SLNitsTsModelProto();

                foreach ($act as $key=>$stream) {
                    foreach ($stream['src'] as $itemNit) {
                        // src - источник
                        $src = new SLPairModel();
                        $src->setFirst($itemNit['first']);
                        $src->setSecond($itemNit['second']);
                        // Вроде у RepeatedField так пушатся элементы в PHP, у меня в JS делается через add
                        $nits->getSrc()[] = $src;
                    }

                    foreach ($stream['dst'] as $itemNit) {
                        $dst = new SLPairModel();
                        $dst->setFirst($itemNit['first']);
                        $dst->setSecond($itemNit['second']);
                        $nits->getDst()[] = $dst;
                    }
                    $myNit->getActual()[$key] = $nits;
                }
            }

            /** Прописываем NIT Other*/

            foreach ($Data['nit']['otherMap'] as $oth) {

                $nits = new SLNitsTsModelProto();

                foreach ($oth as $key=>$stream) {
                    foreach ($stream['src'] as $itemNit) {
                        // src - источник
                        $src = new SLPairModel();
                        $src->setFirst($itemNit['first']);
                        $src->setSecond($itemNit['second']);
                        // Вроде у RepeatedField так пушатся элементы в PHP, у меня в JS делается через add
                        $nits->getSrc()[] = $src;
                    }

                    foreach ($stream['dst'] as $itemNit) {
                        $dst = new SLPairModel();
                        $dst->setFirst($itemNit['first']);
                        $dst->setSecond($itemNit['second']);
                        $nits->getDst()[] = $dst;
                    }
                    $myNit->getOther()[$key] = $nits;
                }
            }

            $modelRemuxer->setNit($myNit);

            /** ---------------------- */

            $graphRemuxerModelProto = new SLGraphRemuxerModelProto();

            $graph = (new Remuxer())->getGraphGuid($Data['graphGuid']);
            $graphRemuxerModelProto->setGraph($graph);

            $graphRemuxerModelProto->setModel($modelRemuxer);

            $itog = (new Remuxer())->setRemuxerModel($graphRemuxerModelProto);
            //Helpers::get_pr($itog->serializeToJsonString());

            $Result['Result']["graph"] = json_decode($graph->serializeToJsonString());
            $Result['Result']["model"] = json_decode($itog->serializeToJsonString());
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

    /**
     * @throws \Exception
     */
    public function startGraph($Data/*, $UserInfo*/)
    {
        $Result = [
            "Data" => $Data,
            "Errors" => "",
            "Result" => false
        ];

        //$Data['graphGuid'] = '43f44e96-f0fd-4146-94ac-992bd7223403';

        try {
            $inputDevice = (new Remuxer())->graphStart($Data['graphGuid']);
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
    public function stopGraph($Data/*, $UserInfo*/)
    {
        $Result = [
            "Data" => $Data,
            "Errors" => "",
            "Result" => false
        ];

        //$Data['graphGuid'] = '43f44e96-f0fd-4146-94ac-992bd7223403';

        try {
            $inputDevice = (new Remuxer())->stopGraph($Data['graphGuid']);
            $Result['Result'] = true;
        }
        catch(\Exception $e)
        {
            $Result['Errors'] = "Ошибка: {$e->getMessage()}.\n";
        }

        return $Result;
    }

}