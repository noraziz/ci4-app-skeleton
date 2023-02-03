<?php
namespace Home\Config;

// Create a new instance of our RouteCollection class.
$routes = \Config\Services::routes();
$routes->add('home', 'Home\Controllers\Home', ['filter' => 'auth']);
$routes->add('/', 'Home\Controllers\Home', ['filter' => 'auth']);

$routes->add('/home/coba3', 'Home\Controllers\Home::coba2', ['filter' => 'noauth']);
$routes->add('/home/nyoba', '\Home\Controllers\Nyoba::index', ['filter' => 'noauth']);
$routes->add('/cca', '\Home\Controllers\Nyoba::cca', ['filter' => 'noauth']);
$routes->add('/ccb', '\Home\Controllers\Nyoba::ccb', ['filter' => 'noauth']);