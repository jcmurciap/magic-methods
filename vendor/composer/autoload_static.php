<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3f6be9b30929cdd7d8313679fce780e0
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Magic\\Magic\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Magic\\Magic\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3f6be9b30929cdd7d8313679fce780e0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3f6be9b30929cdd7d8313679fce780e0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3f6be9b30929cdd7d8313679fce780e0::$classMap;

        }, null, ClassLoader::class);
    }
}
