<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sl_graph_service.proto

namespace Sl;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>sl.SLReserveProto</code>
 */
class SLReserveProto extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.sl.SLReserveProto.SLStateProto state = 1;</code>
     */
    protected $state = 0;
    /**
     * Generated from protobuf field <code>uint32 dst_pid = 2;</code>
     */
    protected $dst_pid = 0;
    /**
     * Generated from protobuf field <code>uint32 dst_number = 3;</code>
     */
    protected $dst_number = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $state
     *     @type int $dst_pid
     *     @type int $dst_number
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\SlGraphService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.sl.SLReserveProto.SLStateProto state = 1;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Generated from protobuf field <code>.sl.SLReserveProto.SLStateProto state = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Sl\SLReserveProto_SLStateProto::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 dst_pid = 2;</code>
     * @return int
     */
    public function getDstPid()
    {
        return $this->dst_pid;
    }

    /**
     * Generated from protobuf field <code>uint32 dst_pid = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setDstPid($var)
    {
        GPBUtil::checkUint32($var);
        $this->dst_pid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 dst_number = 3;</code>
     * @return int
     */
    public function getDstNumber()
    {
        return $this->dst_number;
    }

    /**
     * Generated from protobuf field <code>uint32 dst_number = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setDstNumber($var)
    {
        GPBUtil::checkUint32($var);
        $this->dst_number = $var;

        return $this;
    }

}

