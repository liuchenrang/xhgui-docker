<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit859a15043d49719a9b31a24908bcaad6
{
    public static $files = array (
        '3a37ebac017bc098e9a86b35401e7a68' => __DIR__ . '/..' . '/mongodb/mongodb/src/functions.php',
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '06dd8487319ccd8403765f5b8c9f2d61' => __DIR__ . '/..' . '/alcaeus/mongo-php-adapter/lib/Mongo/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Slim\\Views\\' => 11,
        ),
        'M' => 
        array (
            'MongoDB\\' => 8,
        ),
        'A' => 
        array (
            'Alcaeus\\MongoDbAdapter\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Slim\\Views\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/views',
        ),
        'MongoDB\\' => 
        array (
            0 => __DIR__ . '/..' . '/mongodb/mongodb/src',
        ),
        'Alcaeus\\MongoDbAdapter\\' => 
        array (
            0 => __DIR__ . '/..' . '/alcaeus/mongo-php-adapter/lib/Alcaeus/MongoDbAdapter',
        ),
    );

    public static $prefixesPsr0 = array (
        'X' => 
        array (
            'Xhgui_' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/lib',
            ),
        ),
        'M' => 
        array (
            'Mongo' => 
            array (
                0 => __DIR__ . '/..' . '/alcaeus/mongo-php-adapter/lib/Mongo',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit859a15043d49719a9b31a24908bcaad6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit859a15043d49719a9b31a24908bcaad6::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit859a15043d49719a9b31a24908bcaad6::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit859a15043d49719a9b31a24908bcaad6::$classMap;

        }, null, ClassLoader::class);
    }
}
