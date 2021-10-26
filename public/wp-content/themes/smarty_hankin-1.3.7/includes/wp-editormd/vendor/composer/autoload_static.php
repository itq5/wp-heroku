<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit365689a736b283e16d6f043e268beb3e
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Utils\\' => 6,
        ),
        'S' => 
        array (
            'SettingsApi\\' => 12,
        ),
        'M' => 
        array (
            'Michelf\\' => 8,
        ),
        'F' => 
        array (
            'Front\\' => 6,
        ),
        'E' => 
        array (
            'Editormd\\' => 9,
        ),
        'A' => 
        array (
            'App\\' => 4,
            'Admin\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Utils\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Utils',
        ),
        'SettingsApi\\' => 
        array (
            0 => __DIR__ . '/..' . '/jaxsonwang/wp-settings-api-class/src',
        ),
        'Michelf\\' => 
        array (
            0 => __DIR__ . '/..' . '/michelf/php-markdown/Michelf',
        ),
        'Front\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Front',
        ),
        'Editormd\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/App',
        ),
        'Admin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Admin',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit365689a736b283e16d6f043e268beb3e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit365689a736b283e16d6f043e268beb3e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
