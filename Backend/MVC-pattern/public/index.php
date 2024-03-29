<?php

require_once '../vendor/autoload.php';

$router = new \Core\Router();

$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('posts', ['controller' => 'Posts', 'action' => 'index']);
$router->add('{controller}/{action}');
$router->add('admin/{controller}/{action}', ['namespace' => 'Admin']);
$router->add('{controller}/{action}/{id:\d+}');
$router->add('{controller}/{action}/{name:\w+}/{id:\d+}');

$router->dispatch($_SERVER['QUERY_STRING']);



