<?php

namespace app\services;

use app\repository\ContactRepository;

class ContactServices
{
    private $contactService;
    public function __construct ()
    {
        $this->contactService = new ContactRepository();
    }
    public function sendMessage()
    {
        $name = trim(strip_tags($_POST['name']));
        $email = trim(strip_tags($_POST['email']));
        $phone = trim(strip_tags($_POST['phone']));
        $subject = trim(strip_tags($_POST['subject']));
        $message = trim(strip_tags($_POST['message']));
        if (empty($name) || empty($email) || empty($phone) || empty($subject)
        || empty($message)) {
            echo json_encode(["success" => false,"message" => "Por favor preencha o campo vazio do formulario."]);die;
        }
        $send = $this->contactService->create([
            'email' => $email,
            'name' => $name,
            'phone' => $phone,
            'subject' => $subject,
            'message' => $message,
        ]);

        if ($send) {
            echo json_encode(["success" => true,"message" => "Mensagem enviada com sucesso."]);die;
        }
        echo json_encode(["success" => false,"message" => "Não foi possível enviar a mensagem, por favor tente novamente."]);die;
    }
}
