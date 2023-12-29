<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->post('register_model', 'home::register_model');
$routes->post('login_model', 'home::login_model');
$routes->get('/', 'Home::index');
$routes->get('register', 'Home::register');
$routes->get('login', 'Home::login');

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);
