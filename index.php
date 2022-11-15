<?php
//require_once $_SERVER['DOCUMENT_ROOT'].'/php/vendor/autoload.php';
//test skaffold the last test of skaffold 
//test with Nikita
require_once $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

/**
 * Router
 */
//
opcache_reset();

//var_dump(getenv('POSTGRES_HOST'));
//var_dump(getenv('PATH')); // string(13) "/usr/bin:/bin"

//print_r(getenv('POSTGRES_HOST'));
//print_r($_ENV);
//print_r($_SERVER);

use Core\Router;
$router = new Router;
$router->run();
