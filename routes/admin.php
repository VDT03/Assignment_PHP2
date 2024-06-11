<?php

use Admin\MvcOop\Controllers\Admin\NewController;
use Admin\MvcOop\Controllers\Admin\TagController;
use Admin\MvcOop\Controllers\Admin\UserController;
use Admin\MvcOop\Controllers\Admin\DashboardController;

$router->before('GET|POST', '/admin/*.*', function() {

    if (!is_logged()) {
        header('location: ' . url('auth/login') );
        exit();
    } 

    if (!is_admin()) {
        header('location: ' . url() );
        exit();
    }
    
});

$router->mount('/admin', function () use ($router) {

    $router->get('/', DashboardController::class . '@dashboard');

    // CRUD TAG
    $router->mount('/tags', function () use ($router) {
        $router->get('/',               TagController::class . '@index');  // Danh sách
        $router->get('/create',         TagController::class . '@create'); // Show form thêm mới
        $router->post('/store',         TagController::class . '@store');  // Lưu mới vào DB
        $router->get('/{id}/show',      TagController::class . '@show');   // Xem chi tiết
        $router->get('/{id}/edit',      TagController::class . '@edit');   // Show form sửa
        $router->post('/{id}/update',   TagController::class . '@update'); // Lưu sửa vào DB
        $router->get('/{id}/delete',    TagController::class . '@delete'); // Xóa
    });

    // CRUD NEW
    $router->mount('/news', function () use ($router) {
        $router->get('/',               NewController::class . '@index');  // Danh sách
        $router->get('/create',         NewController::class . '@create'); // Show form thêm mới
        $router->post('/store',         NewController::class . '@store');  // Lưu mới vào DB
        $router->get('/{id}/show',      NewController::class . '@show');   // Xem chi tiết
        $router->get('/{id}/edit',      NewController::class . '@edit');   // Show form sửa
        $router->post('/{id}/update',   NewController::class . '@update'); // Lưu sửa vào DB
        $router->get('/{id}/delete',    NewController::class . '@delete'); // Xóa
    });

    // CRUD USER
    $router->mount('/users', function () use ($router) {
        $router->get('/',               UserController::class . '@index');  // Danh sách
        $router->get('/create',         UserController::class . '@create'); // Show form thêm mới
        $router->post('/store',         UserController::class . '@store');  // Lưu mới vào DB
        $router->get('/{id}/show',      UserController::class . '@show');   // Xem chi tiết
        $router->get('/{id}/edit',      UserController::class . '@edit');   // Show form sửa
        $router->post('/{id}/update',   UserController::class . '@update'); // Lưu sửa vào DB
        $router->get('/{id}/delete',    UserController::class . '@delete'); // Xóa
    });
    
});