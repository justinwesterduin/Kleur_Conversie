<?php

namespace Core;

namespace Core;

class Router
{
    private $routes = [];

    public function add($route, $callback): void
    {
        $this->routes[$route] = $callback;
    }

    public function dispatch()
    {
        $uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
        foreach ($this->routes as $route => $callback) {
            if ($uri === $route) {
                return call_user_func($callback);
            }
        }
        http_response_code(404);
        echo "404 Not Found";
    }
}