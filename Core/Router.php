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
        dd($this->routes);
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri) {
                require_once($route['controller']);
                // die();
                dd($route['uri']);
            }
        }
    }
}
