<?php

/**
 * Exibir error na telo caso existir de sintaxe ou mesmo de exception.
 */
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

require_once 'bootstrap.php';

use app\core\Router;

/**
 * URL BASE do site -> exemplo: http://domain.co.ao/
 * OBS: Obrigatorio informa a url do projecto.
 */
const BASE_URL = "http://localhost/StepForPro/";

/**
 * Classe responsavel por fazer o sistema de roteamento
 */
$router = new Router('StepForPro');

/**
 * Carregado a pagina home
 */
$router -> get('/','PagesServices::index');
/**
 * Carregando a pagina de sobre
 */
$router -> get('/sobre','PagesServices::about');
/**
 * Carregando a pagina de serviços
 */
$router -> get('/servicos','PagesServices::services');
/**
 * Carregando a pagina de login
 */
$router -> get('/login','PagesServices::login');
/**
 * Carregando pagina de ERRO 404 caso a rota informada na url não exista
 */
$router->addNotFoundHandler(function () {
    require_once __DIR__. DIRECTORY_SEPARATOR
    . "app" . DIRECTORY_SEPARATOR . "views" . DIRECTORY_SEPARATOR .
    "error" . DIRECTORY_SEPARATOR . "404.php";
});
/**
 * Executar o roteamento
 */
$router->dispatch();