<?php

$routes = \Config\Services::routes();

$routes->group('admin/users', ['namespace' => 'App\Modules\Admin\Users\Controllers'], function ($routes) 
{
    $routes->get('', 'Users::index', ['filter' => 'admin']);
    $routes->get('add', 'Users::add', ['filter' => 'admin']);
    $routes->get('edit/(:num)', 'Users::edit/$1', ['filter' => 'admin']);
    $routes->get('delete/(:num)', 'Users::delete/$1', ['filter' => 'admin']);
    $routes->get('info/(:num)', 'Users::info/$1', ['filter' => 'admin']);
    $routes->match(['get', 'post'], 'post', 'Users::post', ['filter' => 'admin']);
});