<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitadcfbc1557359768f3bcedeada3188fd
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitadcfbc1557359768f3bcedeada3188fd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitadcfbc1557359768f3bcedeada3188fd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitadcfbc1557359768f3bcedeada3188fd::$classMap;

        }, null, ClassLoader::class);
    }
}