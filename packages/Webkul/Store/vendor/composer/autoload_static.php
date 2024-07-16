<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb1a813bc876c24933da3605d54a7d297
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Webkul\\Shop\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Webkul\\Shop\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb1a813bc876c24933da3605d54a7d297::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb1a813bc876c24933da3605d54a7d297::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb1a813bc876c24933da3605d54a7d297::$classMap;

        }, null, ClassLoader::class);
    }
}
