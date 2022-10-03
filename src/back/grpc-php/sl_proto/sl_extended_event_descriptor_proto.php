<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sl_mpeg_ts.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * descriptor_tag = 0x4E (78)
 *
 * Generated from protobuf message <code>sl_extended_event_descriptor_proto</code>
 */
class sl_extended_event_descriptor_proto extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 descriptor_tag = 1;</code>
     */
    protected $descriptor_tag = 0;
    /**
     * Generated from protobuf field <code>uint32 descriptor_length = 2;</code>
     */
    protected $descriptor_length = 0;
    /**
     * Generated from protobuf field <code>uint32 descriptor_number = 3;</code>
     */
    protected $descriptor_number = 0;
    /**
     * Generated from protobuf field <code>uint32 last_description_number = 4;</code>
     */
    protected $last_description_number = 0;
    /**
     * Generated from protobuf field <code>string iso_639_language_code = 5;</code>
     */
    protected $iso_639_language_code = '';
    /**
     * Generated from protobuf field <code>repeated .sl_extended_event_descriptor_proto.item items = 6;</code>
     */
    private $items;
    /**
     * Generated from protobuf field <code>string text_char = 7;</code>
     */
    protected $text_char = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $descriptor_tag
     *     @type int $descriptor_length
     *     @type int $descriptor_number
     *     @type int $last_description_number
     *     @type string $iso_639_language_code
     *     @type \sl_extended_event_descriptor_proto\item[]|\Google\Protobuf\Internal\RepeatedField $items
     *     @type string $text_char
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\SlMpegTs::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 descriptor_tag = 1;</code>
     * @return int
     */
    public function getDescriptorTag()
    {
        return $this->descriptor_tag;
    }

    /**
     * Generated from protobuf field <code>uint32 descriptor_tag = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setDescriptorTag($var)
    {
        GPBUtil::checkUint32($var);
        $this->descriptor_tag = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 descriptor_length = 2;</code>
     * @return int
     */
    public function getDescriptorLength()
    {
        return $this->descriptor_length;
    }

    /**
     * Generated from protobuf field <code>uint32 descriptor_length = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setDescriptorLength($var)
    {
        GPBUtil::checkUint32($var);
        $this->descriptor_length = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 descriptor_number = 3;</code>
     * @return int
     */
    public function getDescriptorNumber()
    {
        return $this->descriptor_number;
    }

    /**
     * Generated from protobuf field <code>uint32 descriptor_number = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setDescriptorNumber($var)
    {
        GPBUtil::checkUint32($var);
        $this->descriptor_number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 last_description_number = 4;</code>
     * @return int
     */
    public function getLastDescriptionNumber()
    {
        return $this->last_description_number;
    }

    /**
     * Generated from protobuf field <code>uint32 last_description_number = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setLastDescriptionNumber($var)
    {
        GPBUtil::checkUint32($var);
        $this->last_description_number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string iso_639_language_code = 5;</code>
     * @return string
     */
    public function getIso639LanguageCode()
    {
        return $this->iso_639_language_code;
    }

    /**
     * Generated from protobuf field <code>string iso_639_language_code = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setIso639LanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->iso_639_language_code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .sl_extended_event_descriptor_proto.item items = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Generated from protobuf field <code>repeated .sl_extended_event_descriptor_proto.item items = 6;</code>
     * @param \sl_extended_event_descriptor_proto\item[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \sl_extended_event_descriptor_proto\item::class);
        $this->items = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string text_char = 7;</code>
     * @return string
     */
    public function getTextChar()
    {
        return $this->text_char;
    }

    /**
     * Generated from protobuf field <code>string text_char = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setTextChar($var)
    {
        GPBUtil::checkString($var, True);
        $this->text_char = $var;

        return $this;
    }

}

