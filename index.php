<?php
class Autoloader
{
    public static function register()
    {
        spl_autoload_register(function ($class) {
            $filename = 'src' . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';

            if (file_exists($filename)) {
                require $filename;
                return true;
            }
            return false;
        });
    }
}

Autoloader::register();

$user= new \app\users();
$user->notFoundAction();