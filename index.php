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
use Core\Router;
$router = new Router;
$router->run();
