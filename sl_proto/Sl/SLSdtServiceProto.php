<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sl_mpeg_ts.proto

namespace Sl;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>sl.SLSdtServiceProto</code>
 */
class SLSdtServiceProto extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 service_id = 1;</code>
     */
    protected $service_id = 0;
    /**
     * Generated from protobuf field <code>repeated .sl.SLDescriptorProto descriptors = 2;</code>
     */
    private $descriptors;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $service_id
     *     @type \Sl\SLDescriptorProto[]|\Google\Protobuf\Internal\RepeatedField $descriptors
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\SlMpegTs::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 service_id = 1;</code>
     * @return int
     */
    public function getServiceId()
    {
        return $this->service_id;
    }

    /**
     * Generated from protobuf field <code>uint32 service_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setServiceId($var)
    {
        GPBUtil::checkUint32($var);
        $this->service_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .sl.SLDescriptorProto descriptors = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDescriptors()
    {
        return $this->descriptors;
    }

    /**
     * Generated from protobuf field <code>repeated .sl.SLDescriptorProto descriptors = 2;</code>
     * @param \Sl\SLDescriptorProto[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDescriptors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Sl\SLDescriptorProto::class);
        $this->descriptors = $arr;

        return $this;
    }

}

