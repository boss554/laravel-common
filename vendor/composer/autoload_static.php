<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit142c8236f3871e977221c7774438eee8
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kody\\Validation\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kody\\Validation\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit142c8236f3871e977221c7774438eee8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit142c8236f3871e977221c7774438eee8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit142c8236f3871e977221c7774438eee8::$classMap;

        }, null, ClassLoader::class);
    }
}
