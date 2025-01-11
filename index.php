<?php


if (file_exists('Core/functions.php')) {
    require_once('Core/functions.php');
} else {
    echo 'Functions File Not Found';
}
if (file_exists(basePath('Core/Router.php'))) {
    require_once(basePath('Core/Router.php'));
} else {
    echo 'Router File Not Found';
}

$router = new Core\Router();
$routes = [];
if (file_exists(basePath('routes.php'))) {
    $routes = require_once(basePath('routes.php'));
} else {
    echo 'Routes File Not Found';
}

$uri = trim(parse_url($_SERVER['REQUEST_URI'])['path']);
$method = $_SERVER['REQUEST_METHOD'];
// $router->route($uri, $method);


// if (file_exists(basePath('Assets/views/loading.php'))) {
//     require_once(basePath('Assets/views/loading.php'));
// } else {
//     echo 'Loading File Not Found';
// }