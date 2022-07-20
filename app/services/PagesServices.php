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
        return view('index');
    }
    /**
     * Method about responsavel por carregar a pagina
     * sobre (about) do site
     *
     * @return mixed
     */
    public function about (): mixed
    {
        return view('about');
    }
    /**
     * Method services responsavel por carregar a pagina
     * serviços (services) do site
     *
     * @return mixed
     */
    public function services (): mixed
    {
        return view('services');
    }    
}