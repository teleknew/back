<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sl_graph_service.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>sl_ll_device_info_proto</code>
 */
class sl_ll_device_info_proto extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string template = 1;</code>
     */
    protected $template = '';
    /**
     * Generated from protobuf field <code>.sl_ll_device_info_proto.sl_ll_device_type_proto type = 2;</code>
     */
    protected $type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $template
     *     @type int $type
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\SlGraphService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string template = 1;</code>
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Generated from protobuf field <code>string template = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTemplate($var)
    {
        GPBUtil::checkString($var, True);
        $this->template = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.sl_ll_device_info_proto.sl_ll_device_type_proto type = 2;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.sl_ll_device_info_proto.sl_ll_device_type_proto type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \sl_ll_device_info_proto_sl_ll_device_type_proto::class);
        $this->type = $var;

        return $this;
    }

}
