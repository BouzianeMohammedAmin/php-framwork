<?php

use Router\Router; //composer loader 

require '../vendor/autoload.php';
//echo $_GET['url'];
$router = new Router($_GET['url']);

$router->get('/', 'App\Controllers\BlogController@index');

$router->get('/posts/:id', 'App\Controllers\BlogController@show');


$router->run();