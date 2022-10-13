<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit65fb4e42c943ff9f2cdab21af562dec7
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
        0 => __DIR__ . '/../..',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit65fb4e42c943ff9f2cdab21af562dec7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit65fb4e42c943ff9f2cdab21af562dec7::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit65fb4e42c943ff9f2cdab21af562dec7::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInit65fb4e42c943ff9f2cdab21af562dec7::$classMap;

        }, null, ClassLoader::class);
    }
}
