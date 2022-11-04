<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sl_mpeg_ts.proto

namespace Sl;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>sl.SLInputEitProto</code>
 */
class SLInputEitProto extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.sl.SLEitProto actual = 1;</code>
     */
    protected $actual = null;
    /**
     * Generated from protobuf field <code>.sl.SLEitProto actual_schedule = 2;</code>
     */
    protected $actual_schedule = null;
    /**
     * Generated from protobuf field <code>.sl.SLEitProto other = 3;</code>
     */
    protected $other = null;
    /**
     * Generated from protobuf field <code>.sl.SLEitProto other_schedule = 4;</code>
     */
    protected $other_schedule = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Sl\SLEitProto $actual
     *     @type \Sl\SLEitProto $actual_schedule
     *     @type \Sl\SLEitProto $other
     *     @type \Sl\SLEitProto $other_schedule
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\SlMpegTs::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.sl.SLEitProto actual = 1;</code>
     * @return \Sl\SLEitProto
     */
    public function getActual()
    {
        return $this->actual;
    }

    /**
     * Generated from protobuf field <code>.sl.SLEitProto actual = 1;</code>
     * @param \Sl\SLEitProto $var
     * @return $this
     */
    public function setActual($var)
    {
        GPBUtil::checkMessage($var, \Sl\SLEitProto::class);
        $this->actual = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.sl.SLEitProto actual_schedule = 2;</code>
     * @return \Sl\SLEitProto
     */
    public function getActualSchedule()
    {
        return $this->actual_schedule;
    }

    /**
     * Generated from protobuf field <code>.sl.SLEitProto actual_schedule = 2;</code>
     * @param \Sl\SLEitProto $var
     * @return $this
     */
    public function setActualSchedule($var)
    {
        GPBUtil::checkMessage($var, \Sl\SLEitProto::class);
        $this->actual_schedule = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.sl.SLEitProto other = 3;</code>
     * @return \Sl\SLEitProto
     */
    public function getOther()
    {
        return $this->other;
    }

    /**
     * Generated from protobuf field <code>.sl.SLEitProto other = 3;</code>
     * @param \Sl\SLEitProto $var
     * @return $this
     */
    public function setOther($var)
    {
        GPBUtil::checkMessage($var, \Sl\SLEitProto::class);
        $this->other = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.sl.SLEitProto other_schedule = 4;</code>
     * @return \Sl\SLEitProto
     */
    public function getOtherSchedule()
    {
        return $this->other_schedule;
    }

    /**
     * Generated from protobuf field <code>.sl.SLEitProto other_schedule = 4;</code>
     * @param \Sl\SLEitProto $var
     * @return $this
     */
    public function setOtherSchedule($var)
    {
        GPBUtil::checkMessage($var, \Sl\SLEitProto::class);
        $this->other_schedule = $var;

        return $this;
    }

}

