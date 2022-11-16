<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit7b6f293a57c1195ca5c83a122e56b504
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

        spl_autoload_register(array('ComposerAutoloaderInit7b6f293a57c1195ca5c83a122e56b504', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit7b6f293a57c1195ca5c83a122e56b504', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit7b6f293a57c1195ca5c83a122e56b504::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}