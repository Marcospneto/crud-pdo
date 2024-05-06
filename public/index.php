<?php

require "../bootstrap.php";
use app\classes\Routes;
use app\classes\Uri;
use app\classes\Layout;



/*A barra significa que o usuário está na pagina inicial*/
$routes = [
    '/' => 'controllers/index',
    '/create_user' => 'controllers/create_user',
    '/user_store' => 'controllers/user_store',
    '/user_edit' => 'controllers/user_edit',
    '/user_update' => 'controllers/user_update',

];

$uri = Uri::load();

$layout = new Layout;

require Routes::load($routes, $uri);

require $layout->master('layout');

