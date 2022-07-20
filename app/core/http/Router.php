<?php

declare(strict_types=1);

namespace app\core\http;

class Router {

    private $folderApp;
    private array $handlers;
    private $notFoundHandler;
    private const METHOD_POST = 'POST';
    private const METHOD_GET = 'GET';

    public function __construct(string $folderApp)
    {
        $this->folderApp = $folderApp;
    }

    public function get(string $path, callable | string $handler): void 
    {
        $this->addHandler(self::METHOD_GET,$path,$handler);
    }

    public function post(string $path, callable | string $handler): void 
    {
        $this->addHandler(self::METHOD_POST,$path,$handler);
    }

    public function addNotFoundHandler($handler): void
    {
        $this->notFoundHandler = $handler;
    }

    private function addHandler(string $method, string $path, callable | string  $handler): void
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
        $requestPath = str_replace("/$this->folderApp",'',$requestUri['path']);
        $method = $_SERVER["REQUEST_METHOD"];

        $callback = null;
        foreach ($this->handlers as $handler) {
            if ($handler['path'] === $requestPath && $handler['method'] === $method) {
                $callback = $handler['handler'];
            }
        }
        if (!$callback) {
            header('HTTP/1.0 404 Not Found');
            if (!empty($this->notFoundHandler)) {
                $callback = $this->notFoundHandler;
            }
        }

        if (is_string($callback)) {
            $parts = explode('::',$callback);
            if (is_array($parts)) {
                $className = "app\\services\\".array_shift($parts);
                $handler = new $className();

                $method = array_shift($parts);
                $callback = [$handler, $method];
            }
        }
        call_user_func_array($callback,[
            array_merge($_GET, $_POST)
        ]
        );
    }
}