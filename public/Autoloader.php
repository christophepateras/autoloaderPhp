<?php


class Autoloader
{

    static function registerModel()
    {
        spl_autoload_register(array(__CLASS__, 'autoloadModel'));
    }

    static function autoloadModel($class)
    {
        #require the classes
        $file = '../' . $class . '.php';
    //    var_dump($file) for check route;
        if (file_exists($file))
            require $file;
    }
}
