<?php

use CoffeeCode\Router\Router;

$router = new Router(getenv("APP_URL"));
$router->namespace("App\Controllers");

$router->group(null);
$router->get('/', "Web:index", "web.index");
$router->get('/apps', "Web:apps", "web.apps");
$router->get('/certificados', "Web:certifieds", "web.certifieds");
$router->get('/contato', "Web:contact", "web.contact");
$router->get('/teste', "Web:teste", "web.teste");

$router->group('resource');
$router->post('/', "Resource:mail", "resource.mail");

$router->group('oops');
$router->get('/erro/{errcode}', "Error:index", "error.index");

$router->dispatch();

if($router->error()) {
    $router->redirect("error.index", [
        "errcode" => $router->error()
    ]);
}