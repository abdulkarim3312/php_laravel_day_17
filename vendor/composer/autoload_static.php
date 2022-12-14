<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit53ccb31cab3f805ba0c2ff5d3bad74f5
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit53ccb31cab3f805ba0c2ff5d3bad74f5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit53ccb31cab3f805ba0c2ff5d3bad74f5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit53ccb31cab3f805ba0c2ff5d3bad74f5::$classMap;

        }, null, ClassLoader::class);
    }
}
