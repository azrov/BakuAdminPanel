<?php

$routes = \Config\Services::routes();

$routes->group('admin/dashboard', ['namespace' => 'App\Modules\Admin\Dashboard\Controllers'], function ($routes) 
{
    $routes->get('', 'Dashboard::index', ['filter' => 'admin']);
});