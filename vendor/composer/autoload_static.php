<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit37005f05186e9d1d6e3965924e51f590
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
            0 => __DIR__ . '/../..' . '/Class',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit37005f05186e9d1d6e3965924e51f590::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit37005f05186e9d1d6e3965924e51f590::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
