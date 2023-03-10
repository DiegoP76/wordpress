<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite6dc84667f37cb7fbae051824f7b6e42
{
    public static $files = array (
        'bcbb0ee012a4c0d0f47c0ba06d8a82d4' => __DIR__ . '/../..' . '/app/Functions/Utils.php',
    );

    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CakeWP\\BlockSlider\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CakeWP\\BlockSlider\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite6dc84667f37cb7fbae051824f7b6e42::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite6dc84667f37cb7fbae051824f7b6e42::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite6dc84667f37cb7fbae051824f7b6e42::$classMap;

        }, null, ClassLoader::class);
    }
}
