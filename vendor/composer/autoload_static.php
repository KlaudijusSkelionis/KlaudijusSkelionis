<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdac65b9178eec0ca61fef6013ca90e51
{
    public static $prefixLengthsPsr4 = array (
        'u' => 
        array (
            'userApp\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'userApp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdac65b9178eec0ca61fef6013ca90e51::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdac65b9178eec0ca61fef6013ca90e51::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
