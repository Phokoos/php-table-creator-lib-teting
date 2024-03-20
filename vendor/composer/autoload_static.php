<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2bdc468f73fbc637df9a726d70643abc
{
    public static $prefixLengthsPsr4 = array (
        'Y' => 
        array (
            'YdcTableCreator\\' => 16,
        ),
        'M' => 
        array (
            'Mykola\\TestingTablesLibs\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'YdcTableCreator\\' => 
        array (
            0 => __DIR__ . '/..' . '/table-php/table-creator/src',
        ),
        'Mykola\\TestingTablesLibs\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2bdc468f73fbc637df9a726d70643abc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2bdc468f73fbc637df9a726d70643abc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2bdc468f73fbc637df9a726d70643abc::$classMap;

        }, null, ClassLoader::class);
    }
}
