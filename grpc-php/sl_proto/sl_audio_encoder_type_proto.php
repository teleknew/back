<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sl_graph_service.proto

/**
 * Protobuf type <code>sl_audio_encoder_type_proto</code>
 */
class sl_audio_encoder_type_proto
{
    /**
     * Generated from protobuf enum <code>sl_mc_mpeg1_encoder = 0;</code>
     */
    const sl_mc_mpeg1_encoder = 0;
    /**
     * Generated from protobuf enum <code>sl_mc_aac_encoder = 1;</code>
     */
    const sl_mc_aac_encoder = 1;
    /**
     * Generated from protobuf enum <code>sl_mc_ac3_encoder = 2;</code>
     */
    const sl_mc_ac3_encoder = 2;

    private static $valueToName = [
        self::sl_mc_mpeg1_encoder => 'sl_mc_mpeg1_encoder',
        self::sl_mc_aac_encoder => 'sl_mc_aac_encoder',
        self::sl_mc_ac3_encoder => 'sl_mc_ac3_encoder',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}
