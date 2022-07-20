<?php

namespace app\services;

class PagesServices {
    
    /**
     * Method index responsavel por carregar a pagina
     * inicial (home) do site
     *
     * @return mixed
     */
    public function index(): mixed
    {
        $page = 'index';
        return view('layout/app',compact('page'));
    }
    /**
     * Method about responsavel por carregar a pagina
     * sobre (about) do site
     *
     * @return mixed
     */
    public function about (): mixed
    {
        $page = 'about';
        return view('layout/app',compact('page'));
    }
    /**
     * Method services responsavel por carregar a pagina
     * serviços (services) do site
     *
     * @return mixed
     */
    public function services (): mixed
    {
        $page = 'services';
        return view('layout/app',compact('page'));
    }    
    /**
     * Method login responsavel por carregar a pagina de
     * autenticação (login) do site
     *
     * @return mixed
     */
    public function login (): mixed
    {
        return view('login');
    }    
}