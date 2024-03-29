<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sl_graph_service.proto

namespace Sl;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>sl.SLInputProgramProto</code>
 */
class SLInputProgramProto extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string guid = 1;</code>
     */
    protected $guid = '';
    /**
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>uint32 number = 3;</code>
     */
    protected $number = 0;
    /**
     * Generated from protobuf field <code>repeated .sl.SLStreamProto streams = 4;</code>
     */
    private $streams;
    /**
     * Generated from protobuf field <code>string clone = 5;</code>
     */
    protected $clone = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $guid
     *     @type string $name
     *     @type int $number
     *     @type \Sl\SLStreamProto[]|\Google\Protobuf\Internal\RepeatedField $streams
     *     @type string $clone
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\SlGraphService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string guid = 1;</code>
     * @return string
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * Generated from protobuf field <code>string guid = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setGuid($var)
    {
        GPBUtil::checkString($var, True);
        $this->guid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 number = 3;</code>
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Generated from protobuf field <code>uint32 number = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setNumber($var)
    {
        GPBUtil::checkUint32($var);
        $this->number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .sl.SLStreamProto streams = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStreams()
    {
        return $this->streams;
    }

    /**
     * Generated from protobuf field <code>repeated .sl.SLStreamProto streams = 4;</code>
     * @param \Sl\SLStreamProto[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStreams($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Sl\SLStreamProto::class);
        $this->streams = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string clone = 5;</code>
     * @return string
     */
    public function getClone()
    {
        return $this->clone;
    }

    /**
     * Generated from protobuf field <code>string clone = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setClone($var)
    {
        GPBUtil::checkString($var, True);
        $this->clone = $var;

        return $this;
    }

}

