<?php

$routes = \Config\Services::routes();

$routes->group('admin/roles', ['namespace' => 'App\Modules\Admin\Roles\Controllers'], function ($routes) 
{
    $routes->get('', 'Roles::index', ['filter' => 'admin']);
});