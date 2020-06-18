<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitea49b31e7fe51f9e57b62f3e34812160
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tools\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tools\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Tools',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitea49b31e7fe51f9e57b62f3e34812160::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitea49b31e7fe51f9e57b62f3e34812160::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
