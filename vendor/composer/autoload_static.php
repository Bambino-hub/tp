<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit622cd0deb2bc209e61c09cfceccd5328
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
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit622cd0deb2bc209e61c09cfceccd5328::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit622cd0deb2bc209e61c09cfceccd5328::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit622cd0deb2bc209e61c09cfceccd5328::$classMap;

        }, null, ClassLoader::class);
    }
}