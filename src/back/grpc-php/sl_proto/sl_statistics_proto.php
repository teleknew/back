<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sl_graph_service.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>sl_statistics_proto</code>
 */
class sl_statistics_proto extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .sl_statistic_proto list = 1;</code>
     */
    private $list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \sl_statistic_proto[]|\Google\Protobuf\Internal\RepeatedField $list
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\SlGraphService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .sl_statistic_proto list = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * Generated from protobuf field <code>repeated .sl_statistic_proto list = 1;</code>
     * @param \sl_statistic_proto[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \sl_statistic_proto::class);
        $this->list = $arr;

        return $this;
    }

}

