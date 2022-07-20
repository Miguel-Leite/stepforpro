<?php


function view (string $view, array $data = [])
{
    extract($data);
    $view = dirname(__FILE__,2) . DIRECTORY_SEPARATOR . "views" . DIRECTORY_SEPARATOR . $view . ".php";
    if (file_exists($view)) {
        require_once $view;
    }
}

