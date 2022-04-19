<?php


class AutoloaderFactory
{
    public static function register()
    {
        spl_autoload_register(function ($class) {
            $className = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';

            $isAdded = self::addFile($className);
            if ($isAdded) return true;

            $isAdded = self::addFile('factory' . DIRECTORY_SEPARATOR . $className);
            if ($isAdded) return true;

            $isAdded = self::addFile('factory' . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . $className);
            if ($isAdded) return true;

            return false;
        });

    }

    private static function addFile($path)
    {
        if (file_exists($path)) {
            require $path;
            return true;
        }
    }
}

AutoloaderFactory::register();
