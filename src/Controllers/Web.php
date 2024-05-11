<?php

namespace App\Controllers;

use App\Models\App;
use Rodrigotutz\Controller;

class Web extends Controller {

    public $app;

    public function __construct($router) {   
        parent::__construct($router, dirname(__DIR__, 1). "/Views");
    }

    public function index(): void {
        $this->view->addData([
            "title" => "Rodrigo Tutz | Página inicial",
            "home" => "active",
            'sidebar' => "text-dark"
        ]);
        
        echo $this->view->render('web/home');
    }

    public function apps(): void {

        $apps = $this->app = (new App())->find('active = 1')->order('app_order ASC')->fetch(true) ?? "  ";

        $this->view->addData([
            "title" => "Rodrigo Tutz | Apps",
            "appLink" => 'active',
            "apps" => $apps ?? []
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

    public function teste(): void {
        
        $this->view->addData([
            "title" => "Rodrigo Tutz | Página Teste"
        ]);
        
        echo $this->view->render('web/teste');
    }
}