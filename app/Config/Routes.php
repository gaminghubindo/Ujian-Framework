<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

// Public Customer Routes
$routes->get('/', 'Home::index');
$routes->get('menu/(:segment)', 'MenuController::detail/$1');

// Admin Auth Routes (Guest)
$routes->get('admin/login', 'AuthController::login');
$routes->post('admin/login/auth', 'AuthController::attemptLogin');
$routes->get('admin/logout', 'AuthController::logout');

// Admin Protected Routes (Auth Filter)
$routes->group('admin', ['filter' => 'auth'], static function ($routes) {
    $routes->get('/', 'AdminController::index');
    $routes->get('dashboard', 'AdminController::index');
    $routes->get('menu/create', 'AdminController::create');
    $routes->post('menu/store', 'AdminController::store');
    $routes->get('menu/edit/(:num)', 'AdminController::edit/$1');
    $routes->post('menu/update/(:num)', 'AdminController::update/$1');
    $routes->get('menu/delete/(:num)', 'AdminController::delete/$1');
});
