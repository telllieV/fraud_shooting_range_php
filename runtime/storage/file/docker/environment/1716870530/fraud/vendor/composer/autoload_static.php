<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit93d8d49c15e4e4f5c5eb1d0dbd693aa5
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit93d8d49c15e4e4f5c5eb1d0dbd693aa5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit93d8d49c15e4e4f5c5eb1d0dbd693aa5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit93d8d49c15e4e4f5c5eb1d0dbd693aa5::$classMap;

        }, null, ClassLoader::class);
    }
}