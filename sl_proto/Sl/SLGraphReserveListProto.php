<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sl_graph_service.proto

namespace Sl;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>sl.SLGraphReserveListProto</code>
 */
class SLGraphReserveListProto extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.sl.SLGraphProto graph = 1;</code>
     */
    protected $graph = null;
    /**
     * Generated from protobuf field <code>.sl.SLReserveListProto list = 2;</code>
     */
    protected $list = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Sl\SLGraphProto $graph
     *     @type \Sl\SLReserveListProto $list
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
     * Generated from protobuf field <code>.sl.SLReserveListProto list = 2;</code>
     * @return \Sl\SLReserveListProto
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * Generated from protobuf field <code>.sl.SLReserveListProto list = 2;</code>
     * @param \Sl\SLReserveListProto $var
     * @return $this
     */
    public function setList($var)
    {
        GPBUtil::checkMessage($var, \Sl\SLReserveListProto::class);
        $this->list = $var;

        return $this;
    }

}

