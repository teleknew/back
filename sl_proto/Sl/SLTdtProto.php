<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sl_mpeg_ts.proto

namespace Sl;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>sl.SLTdtProto</code>
 */
class SLTdtProto extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 UTC_time = 1;</code>
     */
    protected $UTC_time = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $UTC_time
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\SlMpegTs::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 UTC_time = 1;</code>
     * @return int|string
     */
    public function getUTCTime()
    {
        return $this->UTC_time;
    }

    /**
     * Generated from protobuf field <code>uint64 UTC_time = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUTCTime($var)
    {
        GPBUtil::checkUint64($var);
        $this->UTC_time = $var;

        return $this;
    }

}

