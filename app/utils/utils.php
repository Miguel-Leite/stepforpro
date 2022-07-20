<?php

/**
 * Funcão responsavel por carregar todas views do projecto
 *
 * @param string $view
 * @param array $data
 * @return void
 */
function view (string $view, array $data = []): void
{
    extract($data);
    $view = dirname(__FILE__,2) . DIRECTORY_SEPARATOR . "views" . DIRECTORY_SEPARATOR . $view . ".php";
    if (file_exists($view)) {
        require_once $view;
    }
}

/**
 * Funcão responsavel por carregar os assets do projecto
 *
 * @param string $file
 * @return void
 */
function asset(string $file): string
{
    return rtrim(BASE_URL,'/') . "/public/". $file;
}