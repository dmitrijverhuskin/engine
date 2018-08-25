<?php
/**
 * Created by PhpStorm.
 * User: Dmitriy
 * Date: 24.08.2018
 * Time: 20:48
 */
require 'lib/dev.php';
require 'core/Router.php';
require 'config/routes.php';

use engineMVC\core\Router;

spl_autoload_register(function ($class) {
    $path = str_replace('\\', '/', $class.'.php');
    if(file_exists($path)){
            require $path;
    }
});

session_start();

    $router = new Router();
    $router->run();