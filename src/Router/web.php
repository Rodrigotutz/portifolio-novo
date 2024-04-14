<?php

use CoffeeCode\Router\Router;

$router = new Router(getenv("APP_URL"));
$router->namespace("App\Controllers");

$router->group(null);
$router->get('/', "Web:index", "web.index");
$router->get('/about', "Web:about", "web.about");

$router->get('/erro', "Error.index", "error.index");

$router->dispatch();

if($router->error()) {
    $router->redirect("error.index");
}