<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6e9999a2832f0f2ff7714d4c91d9f937
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'APP\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'APP\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6e9999a2832f0f2ff7714d4c91d9f937::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6e9999a2832f0f2ff7714d4c91d9f937::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
