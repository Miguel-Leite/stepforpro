<?php

use app\core\Router;

ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

require_once 'bootstrap.php';


$router = new Router('StepForPro');
$router -> get('/','PagesServices::index');
$router -> get('/about',function() {
    echo "About Page";
});

$router->addNotFoundHandler(function () {
    require_once __DIR__. DIRECTORY_SEPARATOR
    . "app" . DIRECTORY_SEPARATOR . "views" . DIRECTORY_SEPARATOR .
    "error" . DIRECTORY_SEPARATOR . "404.php";
});

$router->dispatch();