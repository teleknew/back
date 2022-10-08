<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sl_remuxer_model.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *&#47;/////////////////////////////////////////////////////////////////////////////
 * NIT
 *
 * Generated from protobuf message <code>sl_nits_ts_model_proto</code>
 */
class sl_nits_ts_model_proto extends \Google\Protobuf\Internal\Message
{
    /**
     * src ts_id, src on_id
     *
     * Generated from protobuf field <code>repeated .sl_pair_model src = 1;</code>
     */
    private $src;
    /**
     * dst ts_id, dst on_id
     *
     * Generated from protobuf field <code>repeated .sl_pair_model dst = 2;</code>
     */
    private $dst;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \sl_pair_model[]|\Google\Protobuf\Internal\RepeatedField $src
     *           src ts_id, src on_id
     *     @type \sl_pair_model[]|\Google\Protobuf\Internal\RepeatedField $dst
     *           dst ts_id, dst on_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\SlRemuxerModel::initOnce();
        parent::__construct($data);
    }

    /**
     * src ts_id, src on_id
     *
     * Generated from protobuf field <code>repeated .sl_pair_model src = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSrc()
    {
        return $this->src;
    }

    /**
     * src ts_id, src on_id
     *
     * Generated from protobuf field <code>repeated .sl_pair_model src = 1;</code>
     * @param \sl_pair_model[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSrc($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \sl_pair_model::class);
        $this->src = $arr;

        return $this;
    }

    /**
     * dst ts_id, dst on_id
     *
     * Generated from protobuf field <code>repeated .sl_pair_model dst = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDst()
    {
        return $this->dst;
    }

    /**
     * dst ts_id, dst on_id
     *
     * Generated from protobuf field <code>repeated .sl_pair_model dst = 2;</code>
     * @param \sl_pair_model[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDst($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \sl_pair_model::class);
        $this->dst = $arr;

        return $this;
    }

}
