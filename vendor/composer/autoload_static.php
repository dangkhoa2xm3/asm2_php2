<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit63a12c4ce79cfa2d92ac98867ac57f83
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Admin\\Ams2\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Admin\\Ams2\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit63a12c4ce79cfa2d92ac98867ac57f83::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit63a12c4ce79cfa2d92ac98867ac57f83::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit63a12c4ce79cfa2d92ac98867ac57f83::$classMap;

        }, null, ClassLoader::class);
    }
}
