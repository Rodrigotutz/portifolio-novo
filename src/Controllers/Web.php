<?php

namespace App\Controllers;

use Rodrigotutz\Controller;

class Web extends Controller {

    public function __construct($router) {   
        parent::__construct($router, dirname(__DIR__, 1). "/Views");
    }

    public function index(): void {
        $this->view->addData([
            "title" => "Rodrigo Tutz | Página inicial",
            "home" => "active"
        ]);
        
        echo $this->view->render('web/home');
    }

    public function apps(): void {
        $this->view->addData([
            "title" => "Rodrigo Tutz | Apps",
            "apps" => 'active'
        ]);
        
        echo $this->view->render('web/apps');
    }

    public function certifieds(): void {
        $this->view->addData([
            "title" => "Rodrigo Tutz | Meus certificados",
            "certifieds" => "active"
        ]);
        
        echo $this->view->render('web/certifieds');
    }

    public function contact(): void {
        $this->view->addData([
            "title" => "Rodrigo Tutz | Meus contatos",
            "contact" => "active"
        ]);
        
        echo $this->view->render('web/contact');
    }

}