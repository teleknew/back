<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sl_mpeg_ts.proto

namespace Sl;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>sl.SLLocalTimeOffsetDescriptorProto</code>
 */
class SLLocalTimeOffsetDescriptorProto extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .sl.SLLocalTimeOffsetProto local_time_offset = 1;</code>
     */
    private $local_time_offset;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Sl\SLLocalTimeOffsetProto[]|\Google\Protobuf\Internal\RepeatedField $local_time_offset
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\SlMpegTs::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .sl.SLLocalTimeOffsetProto local_time_offset = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLocalTimeOffset()
    {
        return $this->local_time_offset;
    }

    /**
     * Generated from protobuf field <code>repeated .sl.SLLocalTimeOffsetProto local_time_offset = 1;</code>
     * @param \Sl\SLLocalTimeOffsetProto[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLocalTimeOffset($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Sl\SLLocalTimeOffsetProto::class);
        $this->local_time_offset = $arr;

        return $this;
    }

}

