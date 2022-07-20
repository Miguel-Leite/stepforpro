<?php

namespace app\services;

use app\repository\AboutRepository;
use app\repository\ServiceRepository;

class PagesServices {
    
    protected $serviceRepository, $aboutRepository;

    public function __construct()
    {
        $this->serviceRepository = new ServiceRepository();
        $this->aboutRepository = new AboutRepository();
    }

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
        $about = $this->aboutRepository->find(1)['description'];
        return view('layout/app',compact('page','about'));
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
        $services = $this->serviceRepository->all();
        return view('layout/app',compact('page','services'));
    }    
    /**
     * Method login responsavel por carregar a pagina de
     * autenticação (login) do site
     *
     * @return mixed
     */
    public function login (): mixed
    {
        verifyAuth();
        return view('login');
    }    
}