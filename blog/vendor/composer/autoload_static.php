<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit993ea4014b4096b07e0b2d6a0ead2950
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit993ea4014b4096b07e0b2d6a0ead2950::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit993ea4014b4096b07e0b2d6a0ead2950::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
