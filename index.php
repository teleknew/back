<?php
//require_once $_SERVER['DOCUMENT_ROOT'].'/php/vendor/autoload.php';
//test skaffold the last test of skaffold 
require_once $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

/**
 * Router
 */
//
use Core\Router;
$router = new Router;
$router->run();
