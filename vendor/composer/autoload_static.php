<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite28674642bf4cca6df136bfc8c756e03
{
    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInite28674642bf4cca6df136bfc8c756e03::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
