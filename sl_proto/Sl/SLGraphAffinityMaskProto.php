<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sl_graph_service.proto

namespace Sl;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>sl.SLGraphAffinityMaskProto</code>
 */
class SLGraphAffinityMaskProto extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.sl.SLGraphProto graph = 1;</code>
     */
    protected $graph = null;
    /**
     * Generated from protobuf field <code>.sl.SLAffinityMaskProto affinity = 2;</code>
     */
    protected $affinity = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Sl\SLGraphProto $graph
     *     @type \Sl\SLAffinityMaskProto $affinity
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
     * Generated from protobuf field <code>.sl.SLAffinityMaskProto affinity = 2;</code>
     * @return \Sl\SLAffinityMaskProto
     */
    public function getAffinity()
    {
        return $this->affinity;
    }

    /**
     * Generated from protobuf field <code>.sl.SLAffinityMaskProto affinity = 2;</code>
     * @param \Sl\SLAffinityMaskProto $var
     * @return $this
     */
    public function setAffinity($var)
    {
        GPBUtil::checkMessage($var, \Sl\SLAffinityMaskProto::class);
        $this->affinity = $var;

        return $this;
    }

}
