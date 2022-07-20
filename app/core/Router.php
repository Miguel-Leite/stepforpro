<?php

namespace app\core;

class Router {

    private array $handlers;
    private const METHOD_POST = 'POST';
    private const METHOD_GET = 'GET';

    public function get(string $path, string $handler): void 
    {
        $this->addHandler(self::METHOD_GET,$path,$handler);
    }

    public function post(string $path, string $handler): void 
    {
        $this->addHandler(self::METHOD_POST,$path,$handler);
    }

    private function addHandler(string $method, string $path, string | array $handler): void
    {
        $this->handlers[$method . $path] = [
            'path' => $path,
            'method' => $method,
            'handler' => $handler,
        ];
    }

    public function dispatch()
    {
        $requestUri = parse_url($_SERVER['REQUEST_URI']);
        $requestPath = $requestUri['path'];
        var_dump($requestPath);
    }
}