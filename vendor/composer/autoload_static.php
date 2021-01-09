<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd9afe3be459a9f0cd84f82ce7e492c93
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd9afe3be459a9f0cd84f82ce7e492c93::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd9afe3be459a9f0cd84f82ce7e492c93::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd9afe3be459a9f0cd84f82ce7e492c93::$classMap;

        }, null, ClassLoader::class);
    }
}
