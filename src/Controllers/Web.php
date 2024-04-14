<?php

namespace App\Controllers;

use Rodrigotutz\Controller;

class Web extends Controller {

    public function __construct($router) {   
        parent::__construct($router, dirname(__DIR__, 1). "/Views/web/");
    }

    public function index(): void {
        echo "OK";
    }

    public function about(): void {
        echo "about";
    }

}