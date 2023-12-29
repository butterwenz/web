<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->setDefaultController('Home');
$routes->get('/', 'Home::index');
$routes->get('register', 'Home::register');
$routes->get('login', 'Home::login');
// $routes->setAutoRoute(true);
