<?php

namespace services;


abstract class PagesServices {

    /**
     * Função para carregar as views (Paginas)
     *
     * @param string $view
     * @param array $data
     * @return mixed
     */
    public function view (string $view, array $data = []): mixed
    {
        $view = dirname(__FILE__,1) . DIRECTORY_SEPARATOR . "views" . DIRECTORY_SEPARATOR . $view . ".php";
        if (file_exists($view)) {
            require_once $view;
        }
    }
}