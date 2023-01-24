<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf6b210ae4976366b9b0475eb72225c95
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SimpleSoftwareIO\\QrCode\\' => 24,
        ),
        'D' => 
        array (
            'DASPRiD\\Enum\\' => 13,
        ),
        'B' => 
        array (
            'BaconQrCode\\' => 12,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SimpleSoftwareIO\\QrCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/simplesoftwareio/simple-qrcode/src',
        ),
        'DASPRiD\\Enum\\' => 
        array (
            0 => __DIR__ . '/..' . '/dasprid/enum/src',
        ),
        'BaconQrCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/bacon/bacon-qr-code/src',
        ),
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf6b210ae4976366b9b0475eb72225c95::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf6b210ae4976366b9b0475eb72225c95::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf6b210ae4976366b9b0475eb72225c95::$classMap;

        }, null, ClassLoader::class);
    }
}
