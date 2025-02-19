<?php
session_start();
if (file_exists('Core/functions.php')) {
    require_once('Core/functions.php');
} else {
    echo 'Functions File Not Found';
}
loadFile('Router', basePath('Core/Router.php'));
$router = new Core\Router();
$routes = [];
if (file_exists(basePath('routes.php'))) {
    $routes = require_once(basePath('routes.php'));
} else {
    echo 'Routes File Not Found';
}

$uri = rtrim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$method = $_SERVER['REQUEST_METHOD'];
$router->route($uri, $method);
loadFile('Loading Page', basePath('Assets/views/loading.php'));
