<?php

$routes = \Config\Services::routes();

$routes->group('home', ['namespace' => 'App\Modules\Home\Controllers'], function ($routes) 
{
    $routes->get('', 'Home::index');
    $routes->get('lang/{locale}', 'Home::lang');
});