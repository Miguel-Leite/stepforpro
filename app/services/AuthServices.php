<?php

namespace app\services;

use app\repository\UserRepository;

class AuthServices 
{
    private $userRepository;

    public function __construct () 
    {
        $this->userRepository = new UserRepository();
    }

    public function login()
    {
        $email = trim(strip_tags($_POST['email']));
        $password = trim(strip_tags($_POST['password']));
        $user = $this->userRepository->findBy($email,'email');
        if (empty($email) || empty($password)) {
            echo json_encode(["success" => false,"message" => "Por favor preencha o campo vazio do formulario."]);die;
        }
        
        if (empty($user) || !password_verify($password,$user['password'])) {
            echo json_encode(["success" => false,"message" => "E-mail ou senha estão incorrectas."]);die;
        }
        
        $_SESSION[AUTH_SESSION_KEY] = (object)["id"=>$user['id'],"name"=>$user['name'],"email"=>$user['email'],"is_admin"=>$user['is_admin']];
        echo json_encode(["success" => true,"message" => "Olá ${user['name']}, seja bem-vindo!"]); die;
    }

    public function logout()
    {
        unset($_SESSION[AUTH_SESSION_KEY]);
        return redirect('');
    }
}