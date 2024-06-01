<?php

use Admin\MvcOop\Controllers\Client\HomeController;

$router->get( '/', HomeController::class . '@index');
