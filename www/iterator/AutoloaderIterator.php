<?php

class AutoloaderIterator
{
    public static function register()
    {
        spl_autoload_register(function ($class) {
            $className = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';

            $isAdded = self::addFile($className);
            if ($isAdded) return true;

            $isAdded = self::addFile('iterator' . DIRECTORY_SEPARATOR . $className);
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

AutoloaderIterator::register();
