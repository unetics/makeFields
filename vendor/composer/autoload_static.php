<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf9e679d95401c0c8b714a38601d4a23a
{
    public static $files = array (
        '2b1d85ebb4ebd8f0597433a9fc7b631b' => __DIR__ . '/../..' . '/meta-box.php',
    );

    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MakeFields\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MakeFields\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf9e679d95401c0c8b714a38601d4a23a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf9e679d95401c0c8b714a38601d4a23a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}