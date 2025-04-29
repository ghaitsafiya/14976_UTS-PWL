<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AuthController::login'); //route untuk login
$routes->post('/login', 'AuthController::doLogin');
$routes->get('/logout', 'AuthController::logout');

$routes->get('/dashboard', 'DashboardController::index', ['filter' => 'auth']); //route untuk dashboard

$routes->get('/products', 'ProductController::index', ['filter' => 'auth']);
$routes->get('/products/create', 'ProductController::create', ['filter' => 'auth']);
$routes->post('/products/store', 'ProductController::store', ['filter' => 'auth']);
$routes->get('/products/edit/(:num)', 'ProductController::edit/$1', ['filter' => 'auth']);
$routes->post('/products/update/(:num)', 'ProductController::update/$1', ['filter' => 'auth']);
$routes->get('/products/delete/(:num)', 'ProductController::delete/$1', ['filter' => 'auth']);

$routes->get('/users', 'UserController::index', ['filter' => 'auth']);
$routes->get('/admin','UserController::index', ['filter'=>'auth']);

$routes->get('/cart/add/(:num)', 'CartController::add/$1', ['filter' => 'auth']);
$routes->get('/cart', 'CartController::view', ['filter' => 'auth']);
