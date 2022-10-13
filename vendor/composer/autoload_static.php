<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcaa8877c601eea543b9abbc97496e429
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Grpc\\' => 5,
            'Google\\Protobuf\\' => 16,
            'GPBMetadata\\Google\\Protobuf\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Grpc\\' => 
        array (
            0 => __DIR__ . '/..' . '/grpc/grpc/src/lib',
        ),
        'Google\\Protobuf\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf',
        ),
        'GPBMetadata\\Google\\Protobuf\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/protobuf/src/GPBMetadata/Google/Protobuf',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/sl_proto',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcaa8877c601eea543b9abbc97496e429::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcaa8877c601eea543b9abbc97496e429::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInitcaa8877c601eea543b9abbc97496e429::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInitcaa8877c601eea543b9abbc97496e429::$classMap;

        }, null, ClassLoader::class);
    }
}
