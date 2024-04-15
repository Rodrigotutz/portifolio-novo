<?php

require __DIR__ . "/../vendor/autoload.php";

use Spatie\Ignition\Ignition;
Ignition::make()->register();

require __DIR__ . "/../src/Router/web.php";