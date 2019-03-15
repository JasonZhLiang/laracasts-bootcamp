<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb1f761b98b18968f0a0ce8f9ed1a9a07
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Acme\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Acme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb1f761b98b18968f0a0ce8f9ed1a9a07::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb1f761b98b18968f0a0ce8f9ed1a9a07::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
