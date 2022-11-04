<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sl_graph_service.proto

namespace Sl\SLLLDeviceInfoProto;

use UnexpectedValueException;

/**
 * Protobuf type <code>sl.SLLLDeviceInfoProto.SLLLDeviceTypeProto</code>
 */
class SLLLDeviceTypeProto
{
    /**
     * Generated from protobuf enum <code>sl_unknown = 0;</code>
     */
    const sl_unknown = 0;

    private static $valueToName = [
        self::sl_unknown => 'sl_unknown',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SLLLDeviceTypeProto::class, \Sl\SLLLDeviceInfoProto_SLLLDeviceTypeProto::class);
