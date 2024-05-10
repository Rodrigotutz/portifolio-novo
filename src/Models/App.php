<?php

namespace App\Models;

use CoffeeCode\DataLayer\DataLayer;

class App extends DataLayer {

    public function __construct() {
        parent::__construct('apps', ['title', 'link', 'description'], timestamps:true);
    }
}