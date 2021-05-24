<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitea380264e21eed85219a2aa7d7da503d
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/..' . '/Core',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitea380264e21eed85219a2aa7d7da503d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitea380264e21eed85219a2aa7d7da503d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitea380264e21eed85219a2aa7d7da503d::$classMap;

        }, null, ClassLoader::class);
    }
}