<?php

namespace Core;

class Router
{
    protected $routes = [];
    protected function add($uri, $controller, $method)
    {
        $this->routes[] = ['uri' => $uri, 'controller' => $controller, 'method' => $method];
        return $this->routes;
    }
    public function get($uri, $controller)
    {
        $this->add($uri, $controller, 'GET');
    }
    public function post($uri, $controller)
    {
        $this->add($uri, $controller, 'POST');
    }
    public function route($uri, $method)
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $method === $route['method']) {
                require_once($route['controller']);
                exit();
            }
        }
        $this->abort(404);
    }
    protected function abort($code = 404)
    {
        http_response_code($code);
        views("{$code}.php");
        die();
    }
}
