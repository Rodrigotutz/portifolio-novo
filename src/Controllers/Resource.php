<?php

namespace App\Controllers;

use Rodrigotutz\Controller;
use App\Core\Mail;

class Resource extends Controller {

    public function __construct($router)  {
        parent::__construct($router, dirname(__DIR__, 1). "/Views");
    }

    public function mail($data) {
        $name = filter_var($data['name'], FILTER_DEFAULT);
        $email = filter_var($data['email'], FILTER_VALIDATE_EMAIL);
        $message = filter_var($data['message'], FILTER_DEFAULT);
        $subject = filter_var($data['subject'], FILTER_DEFAULT);

        if(!$name || !$email || !$message || !$subject) {
            $this->router->redirect("web.contact", [
                'error' => 'invalid-fields'
            ]);
        }

        $mail = new Mail(getenv("MAIL_HOST"), getenv("MAIL_PORT"), getenv("MAIL_SECURITY"), getenv("MAIL_USER"), getenv("MAIL_PASSWORD"));
        $mail->add("E-mail portifólio", "<h1>Nome: $name <br>Email: $email <br> Assunto: $subject <br> Mensagem: $message</h1>", getenv("MAIL_NAME"), getenv("MAIL_FROM")); 
        
        if(!$mail->send()) {
            $this->router->redirect('web.contact', ['error' => 'not-allowed']);
        }

        $this->router->redirect('web.contact', ['success' => "email-send"]);

    }
}