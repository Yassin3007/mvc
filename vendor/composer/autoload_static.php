<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd8a0a937623b9996d4dbcd621908d679
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MVC\\' => 4,
        ),
        'D' => 
        array (
            'Dcblogdev\\PdoWrapper\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MVC\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'Dcblogdev\\PdoWrapper\\' => 
        array (
            0 => __DIR__ . '/..' . '/dcblogdev/pdo-wrapper/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd8a0a937623b9996d4dbcd621908d679::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd8a0a937623b9996d4dbcd621908d679::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd8a0a937623b9996d4dbcd621908d679::$classMap;

        }, null, ClassLoader::class);
    }
}
