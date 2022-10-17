<?php

$routes = \Config\Services::routes();

$routes->group('admin/settings', ['namespace' => 'App\Modules\Admin\Settings\Controllers'], function ($routes) 
{
    $routes->get('', 'Settings::index', ['filter' => 'admin']);
    $routes->match(['get', 'post'], 'post', 'Settings::post', ['filter' => 'admin']);
});