<?php


class Autoloader
{

    static function registerModel()
    {
        spl_autoload_register(array(__CLASS__, 'autoloadModel'));
    }

    static function autoloadModel($class)
    {
        #require the models classes
        $file = '../' . $class . '.php';
    //    var_dump($file);
        if (file_exists($file))
            require $file;
    }
}
