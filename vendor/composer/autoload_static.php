<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc9b39ac61b2707398fdf574c032907b6
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LINE\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LINE\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc9b39ac61b2707398fdf574c032907b6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc9b39ac61b2707398fdf574c032907b6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
