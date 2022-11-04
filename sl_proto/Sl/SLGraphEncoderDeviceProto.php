<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sl_graph_service.proto

namespace Sl;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>sl.SLGraphEncoderDeviceProto</code>
 */
class SLGraphEncoderDeviceProto extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.sl.SLGraphProto graph = 1;</code>
     */
    protected $graph = null;
    /**
     * Generated from protobuf field <code>.sl.SLEncoderProto encoder = 2;</code>
     */
    protected $encoder = null;
    /**
     * Generated from protobuf field <code>.sl.SLDeviceProto device = 3;</code>
     */
    protected $device = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Sl\SLGraphProto $graph
     *     @type \Sl\SLEncoderProto $encoder
     *     @type \Sl\SLDeviceProto $device
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\SlGraphService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.sl.SLGraphProto graph = 1;</code>
     * @return \Sl\SLGraphProto
     */
    public function getGraph()
    {
        return $this->graph;
    }

    /**
     * Generated from protobuf field <code>.sl.SLGraphProto graph = 1;</code>
     * @param \Sl\SLGraphProto $var
     * @return $this
     */
    public function setGraph($var)
    {
        GPBUtil::checkMessage($var, \Sl\SLGraphProto::class);
        $this->graph = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.sl.SLEncoderProto encoder = 2;</code>
     * @return \Sl\SLEncoderProto
     */
    public function getEncoder()
    {
        return $this->encoder;
    }

    /**
     * Generated from protobuf field <code>.sl.SLEncoderProto encoder = 2;</code>
     * @param \Sl\SLEncoderProto $var
     * @return $this
     */
    public function setEncoder($var)
    {
        GPBUtil::checkMessage($var, \Sl\SLEncoderProto::class);
        $this->encoder = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.sl.SLDeviceProto device = 3;</code>
     * @return \Sl\SLDeviceProto
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * Generated from protobuf field <code>.sl.SLDeviceProto device = 3;</code>
     * @param \Sl\SLDeviceProto $var
     * @return $this
     */
    public function setDevice($var)
    {
        GPBUtil::checkMessage($var, \Sl\SLDeviceProto::class);
        $this->device = $var;

        return $this;
    }

}
