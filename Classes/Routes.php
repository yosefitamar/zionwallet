<?php

namespace Classes;

use Exception;

class Routes
{
    private array $routes = [
        '/' => ['controller' => 'HomeController', 'method' => 'index'],
        '/assets' => ['controller' => 'AssetsController', 'method' => 'index'],
    ];

    /**
     * @throws Exception
     */
    public function __construct()
    {
        $this->dispatch();
    }

    private function getUri(): string
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }

    private function routeExists($uri): bool
    {
        return isset($this->routes[$uri]);
    }

    /**
     * @throws Exception
     */
    private function dispatchRoute($uri): void
    {
        $route = $this->routes[$uri];
        $controllerName = "\\Controllers\\" . $route['controller'];
        $methodName = $route['method'];

        if (class_exists($controllerName) && method_exists($controllerName, $methodName)) {
            $controller = new $controllerName();
            $controller->$methodName();
        } else {
            $this->handleNotFound();
        }
    }

    /**
     * @throws Exception
     */
    private function handleNotFound(): void
    {
        Render::notFound();
    }

    /**
     * @throws Exception
     */
    public function dispatch(): void
    {
        $uri = $this->getUri();

        if ($this->routeExists($uri)) {
            $this->dispatchRoute($uri);
        } else {
            $this->handleNotFound();
        }
    }
}