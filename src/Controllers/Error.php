<?php

namespace App\Controllers;

use Rodrigotutz\Controller;

class Error extends Controller {

    public function __construct($router) {   
        parent::__construct($router, dirname(__DIR__, 1). "/Views");
    }
    
    public function index($errcode): void {
        $this->view->addData([
            "title" => "Oops - " . $errcode['errcode'],
            "code" => $errcode['errcode']
        ]);

        echo $this->view->render('error/error');
    }
}