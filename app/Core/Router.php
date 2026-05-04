<?php

declare(strict_types=1);

namespace App\Core;

class Router
{
    /** @var array<string, array{0: string, 1: string}> */
    private array $routes = [];

    public function get(string $path, string $controller, string $method): void
    {
        $this->routes[$path] = [$controller, $method];
    }

    public function dispatch(string $uri): void
    {
        $path = parse_url($uri, PHP_URL_PATH) ?? '/';
        $path = rtrim($path, '/') ?: '/';

        foreach ($this->routes as $route => $handler) {
            $pattern = '#^' . preg_replace('#\{([a-z]+)\}#', '(?P<$1>[^/]+)', $route) . '$#i';
            if (!preg_match($pattern, $path, $matches)) {
                continue;
            }
            [$class, $action] = $handler;
            $params = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY);
            $controller = new $class();
            $ref = new \ReflectionMethod($class, $action);
            if ($ref->getNumberOfParameters() === 0) {
                $controller->$action();
            } else {
                $controller->$action($params);
            }
            return;
        }

        http_response_code(404);
        echo '<!DOCTYPE html><html><head><meta charset="utf-8"><title>404</title></head><body><p>Página no encontrada</p></body></html>';
    }
}
