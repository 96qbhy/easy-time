<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9959da4d37b3d6f55ff95273fbfee2d1
{
    public static $files = array (
        'bd9634f2d41831496de0d3dfe4c94881' => __DIR__ . '/..' . '/symfony/polyfill-php56/bootstrap.php',
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tcp\\' => 4,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Util\\' => 22,
            'Symfony\\Polyfill\\Php56\\' => 23,
            'Swoole\\' => 7,
            'SuperClosure\\' => 13,
        ),
        'R' => 
        array (
            'Rpc\\' => 4,
        ),
        'P' => 
        array (
            'PhpParser\\' => 10,
        ),
        'F' => 
        array (
            'FastRoute\\' => 10,
        ),
        'E' => 
        array (
            'EasySwoole\\Test\\' => 16,
            'EasySwoole\\' => 11,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tcp\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/easyswoole/Tcp',
        ),
        'Symfony\\Polyfill\\Util\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-util',
        ),
        'Symfony\\Polyfill\\Php56\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php56',
        ),
        'Swoole\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/swoole-ide-helper/src',
        ),
        'SuperClosure\\' => 
        array (
            0 => __DIR__ . '/..' . '/jeremeamia/SuperClosure/src',
        ),
        'Rpc\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/easyswoole/Rpc',
        ),
        'PhpParser\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/php-parser/lib/PhpParser',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
        'EasySwoole\\Test\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/easyswoole/test',
        ),
        'EasySwoole\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/easyswoole/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Application',
            1 => __DIR__ . '/..' . '/easyswoole/easyswoole/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9959da4d37b3d6f55ff95273fbfee2d1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9959da4d37b3d6f55ff95273fbfee2d1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
