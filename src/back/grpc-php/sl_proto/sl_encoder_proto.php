<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sl_graph_service.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>sl_encoder_proto</code>
 */
class sl_encoder_proto extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>.sl_video_encoder_type_proto video = 3;</code>
     */
    protected $video = 0;
    /**
     * Generated from protobuf field <code>.sl_audio_encoder_type_proto audio = 4;</code>
     */
    protected $audio = 0;
    /**
     * Generated from protobuf field <code>string settings = 5;</code>
     */
    protected $settings = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $guid
     *     @type string $name
     *     @type int $video
     *     @type int $audio
     *     @type string $settings
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
     * Generated from protobuf field <code>.sl_video_encoder_type_proto video = 3;</code>
     * @return int
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * Generated from protobuf field <code>.sl_video_encoder_type_proto video = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setVideo($var)
    {
        GPBUtil::checkEnum($var, \sl_video_encoder_type_proto::class);
        $this->video = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.sl_audio_encoder_type_proto audio = 4;</code>
     * @return int
     */
    public function getAudio()
    {
        return $this->audio;
    }

    /**
     * Generated from protobuf field <code>.sl_audio_encoder_type_proto audio = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setAudio($var)
    {
        GPBUtil::checkEnum($var, \sl_audio_encoder_type_proto::class);
        $this->audio = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string settings = 5;</code>
     * @return string
     */
    public function getSettings()
    {
        return $this->settings;
    }

    /**
     * Generated from protobuf field <code>string settings = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setSettings($var)
    {
        GPBUtil::checkString($var, True);
        $this->settings = $var;

        return $this;
    }

}

