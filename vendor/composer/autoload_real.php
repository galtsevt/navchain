<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitf56ce87d6ae93fd2edc020683d3f0c9e
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitf56ce87d6ae93fd2edc020683d3f0c9e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitf56ce87d6ae93fd2edc020683d3f0c9e', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitf56ce87d6ae93fd2edc020683d3f0c9e::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
