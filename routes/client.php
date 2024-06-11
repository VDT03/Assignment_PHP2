<?php

use Admin\MvcOop\Controllers\Client\AuthController;
use Admin\MvcOop\Controllers\Client\HomeController;
use Admin\MvcOop\Controllers\Client\InfoController;
use Admin\MvcOop\Controllers\Client\ListController;
use Admin\MvcOop\Controllers\Client\ShowDetailController;

$router->get('/',               HomeController::class . '@index');

$router->get('/list',           ListController::class . '@index');
$router->get('/{id}/detail',    ShowDetailController::class . '@show');
$router->get('/info',           InfoController::class . '@index');

$router->get( '/auth/login',            AuthController::class . '@showFormLogin');
$router->post( '/auth/handle-login',    AuthController::class . '@login');
$router->get( '/auth/logout',           AuthController::class . '@logout');