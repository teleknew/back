<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sl_mpeg_ts.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>sl_input_sdt_proto</code>
 */
class sl_input_sdt_proto extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.sl_sdt_proto actual = 1;</code>
     */
    protected $actual = null;
    /**
     * Generated from protobuf field <code>.sl_sdt_proto other = 2;</code>
     */
    protected $other = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \sl_sdt_proto $actual
     *     @type \sl_sdt_proto $other
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\SlMpegTs::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.sl_sdt_proto actual = 1;</code>
     * @return \sl_sdt_proto
     */
    public function getActual()
    {
        return $this->actual;
    }

    /**
     * Generated from protobuf field <code>.sl_sdt_proto actual = 1;</code>
     * @param \sl_sdt_proto $var
     * @return $this
     */
    public function setActual($var)
    {
        GPBUtil::checkMessage($var, \sl_sdt_proto::class);
        $this->actual = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.sl_sdt_proto other = 2;</code>
     * @return \sl_sdt_proto
     */
    public function getOther()
    {
        return $this->other;
    }

    /**
     * Generated from protobuf field <code>.sl_sdt_proto other = 2;</code>
     * @param \sl_sdt_proto $var
     * @return $this
     */
    public function setOther($var)
    {
        GPBUtil::checkMessage($var, \sl_sdt_proto::class);
        $this->other = $var;

        return $this;
    }

}

