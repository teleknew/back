<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sl_remuxer_model.proto

namespace GPBMetadata;

class SlRemuxerModel
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(hex2bin(
            "0a9a180a16736c5f72656d757865725f6d6f64656c2e70726f746f1202736c222c0a0b534c506169724d6f64656c120d0a05666972737418012001280d120e0a067365636f6e6418022001280d229c020a0f534c506d744d6f64656c50726f746f121c0a0373726318012001280b320f2e736c2e534c506169724d6f64656c121c0a0364737418022001280b320f2e736c2e534c506169724d6f64656c12280a077265736572766518032001280e32172e736c2e534c52657365727665537461746550726f746f12270a0673746174757318042001280e32172e736c2e534c52657365727665537461746550726f746f12310a0773747265616d7318052003280b32202e736c2e534c506d744d6f64656c50726f746f2e53747265616d73456e74727912170a0f6175746f5f746f5f726573657276651806200128081a2e0a0c53747265616d73456e747279120b0a036b657918012001280d120d0a0576616c756518022001280d3a02380122350a10534c506d74734d6f64656c50726f746f12210a04706d747318012003280b32132e736c2e534c506d744d6f64656c50726f746f2287010a0f534c5061744d6f64656c50726f746f122f0a06696e7075747318012003280b321f2e736c2e534c5061744d6f64656c50726f746f2e496e70757473456e7472791a430a0b496e70757473456e747279120b0a036b657918012001280912230a0576616c756518022001280b32142e736c2e534c506d74734d6f64656c50726f746f3a02380122320a0e534c536474735364734d6f64656c12200a077372635f64737418012003280b320f2e736c2e534c506169724d6f64656c22f6010a0f534c5364744d6f64656c50726f746f122f0a0661637475616c18012003280b321f2e736c2e534c5364744d6f64656c50726f746f2e41637475616c456e747279122d0a056f7468657218022003280b321e2e736c2e534c5364744d6f64656c50726f746f2e4f74686572456e7472791a410a0b41637475616c456e747279120b0a036b657918012001280912210a0576616c756518022001280b32122e736c2e534c536474735364734d6f64656c3a0238011a400a0a4f74686572456e747279120b0a036b657918012001280912210a0576616c756518022001280b32122e736c2e534c536474735364734d6f64656c3a02380122500a12534c4e69747354734d6f64656c50726f746f121c0a0373726318012003280b320f2e736c2e534c506169724d6f64656c121c0a0364737418022003280b320f2e736c2e534c506169724d6f64656c22fe010a0f534c4e69744d6f64656c50726f746f122f0a0661637475616c18012003280b321f2e736c2e534c4e69744d6f64656c50726f746f2e41637475616c456e747279122d0a056f7468657218022003280b321e2e736c2e534c4e69744d6f64656c50726f746f2e4f74686572456e7472791a450a0b41637475616c456e747279120b0a036b657918012001280912250a0576616c756518022001280b32162e736c2e534c4e69747354734d6f64656c50726f746f3a0238011a440a0a4f74686572456e747279120b0a036b657918012001280912250a0576616c756518022001280b32162e736c2e534c4e69747354734d6f64656c50726f746f3a0238012285010a16534c456974536572766963654d6f64656c50726f746f123a0a08736572766963657318012003280b32282e736c2e534c456974536572766963654d6f64656c50726f746f2e5365727669636573456e7472791a2f0a0d5365727669636573456e747279120b0a036b657918012001280d120d0a0576616c756518022001280d3a02380122f2050a0f534c4569744d6f64656c50726f746f12240a05737461746518012001280e32152e736c2e534c5461626c65537461746550726f746f120c0a047061746818022001280912130a0b6d61785f6269747261746518032001280412190a1161637475616c5f72657065746974696f6e18042001280412180a106f746865725f72657065746974696f6e18052001280412220a1a61637475616c5f7363686564756c655f72657065746974696f6e18062001280412210a196f746865725f7363686564756c655f72657065746974696f6e180720012804122f0a0661637475616c18082003280b321f2e736c2e534c4569744d6f64656c50726f746f2e41637475616c456e747279122d0a056f7468657218092003280b321e2e736c2e534c4569744d6f64656c50726f746f2e4f74686572456e74727912400a0f61637475616c5f7363686564756c65180a2003280b32272e736c2e534c4569744d6f64656c50726f746f2e41637475616c5363686564756c65456e747279123e0a0e6f746865725f7363686564756c65180b2003280b32262e736c2e534c4569744d6f64656c50726f746f2e4f746865725363686564756c65456e7472791a490a0b41637475616c456e747279120b0a036b657918012001280912290a0576616c756518022001280b321a2e736c2e534c456974536572766963654d6f64656c50726f746f3a0238011a480a0a4f74686572456e747279120b0a036b657918012001280912290a0576616c756518022001280b321a2e736c2e534c456974536572766963654d6f64656c50726f746f3a0238011a510a1341637475616c5363686564756c65456e747279120b0a036b657918012001280912290a0576616c756518022001280b321a2e736c2e534c456974536572766963654d6f64656c50726f746f3a0238011a500a124f746865725363686564756c65456e747279120b0a036b657918012001280912290a0576616c756518022001280b321a2e736c2e534c456974536572766963654d6f64656c50726f746f3a02380122200a0f534c546f744d6f64656c50726f746f120d0a05696e70757418012001280922200a0f534c5464744d6f64656c50726f746f120d0a05696e70757418012001280922200a0f534c4361744d6f64656c50726f746f120d0a05696e707574180120012809227a0a13534c4f746865725069645069647350726f746f12340a077372635f64737418012003280b32232e736c2e534c4f746865725069645069647350726f746f2e537263447374456e7472791a2d0a0b537263447374456e747279120b0a036b657918012001280d120d0a0576616c756518022001280d3a0238012287010a0f534c4f7468657250696450726f746f122d0a05696e70757418012003280b321e2e736c2e534c4f7468657250696450726f746f2e496e707574456e7472791a450a0a496e707574456e747279120b0a036b657918012001280912260a0576616c756518022001280b32172e736c2e534c4f746865725069645069647350726f746f3a02380122f7030a0c534c4d6f64656c50726f746f121b0a137472616e73706f72745f73747265616d5f696418012001280d121b0a136f726967696e616c5f6e6574776f726b5f696418022001280d12190a1161637475616c5f6e6574776f726b5f696418032001280d12180a106f746865725f6e6574776f726b5f696418042001280d12210a196f746865725f7472616e73706f72745f73747265616d5f696418052001280d12210a196f746865725f6f726967696e616c5f6e6574776f726b5f696418062001280d120f0a076269747261746518072001280412200a0370617418082001280b32132e736c2e534c5061744d6f64656c50726f746f12200a0363617418092001280b32132e736c2e534c4361744d6f64656c50726f746f12200a03746474180a2001280b32132e736c2e534c5464744d6f64656c50726f746f12200a03746f74180b2001280b32132e736c2e534c546f744d6f64656c50726f746f12200a03736474180c2001280b32132e736c2e534c5364744d6f64656c50726f746f12200a036e6974180d2001280b32132e736c2e534c4e69744d6f64656c50726f746f12200a03656974180e2001280b32132e736c2e534c4569744d6f64656c50726f746f12260a096f746865725f706964180f2001280b32132e736c2e534c4f7468657250696450726f746f120b0a037662721810200128082a420a13534c52657365727665537461746550726f746f120d0a09736c5f6e6f726d616c1000120e0a0a736c5f726573657276651001120c0a08736c5f676f63687310022a3f0a11534c5461626c65537461746550726f746f120a0a06655f6e6f6e651000120e0a0a655f67656e65726174651001120e0a0a655f70617373746872751002620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

