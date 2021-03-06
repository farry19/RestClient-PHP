<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit70e2c8cd06d79f4ea37a07f591785a7c
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'RestClient\\' => 11,
        ),
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'D' => 
        array (
            'Data\\' => 5,
        ),
        'C' => 
        array (
            'Controllers\\' => 12,
            'Config\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'RestClient\\' => 
        array (
            0 => __DIR__ . '/../..' . '/RestClient',
        ),
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Models',
        ),
        'Data\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Data',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Controllers',
        ),
        'Config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Config',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit70e2c8cd06d79f4ea37a07f591785a7c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit70e2c8cd06d79f4ea37a07f591785a7c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
