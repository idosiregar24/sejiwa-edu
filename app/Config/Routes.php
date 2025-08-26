<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//Routes Untuk AuthController
$routes->get('/', 'Home::index');
$routes->get('register', 'AuthController::register');
$routes->post('register', 'AuthController::register');
$routes->get('login', 'AuthController::login');
$routes->post('login', 'Authcontroller::login');
$routes->get('verify', 'AuthController::verifyOtp');
$routes->post('verify', 'AuthController::verifyOtp');
$routes->get('verifyOtp', 'AuthController::verifyOtp');
$routes->post('verifyOtp', 'AuthController::verifyOtp');
$routes->get('logout', 'AuthController::logout');
$routes->post('logout', 'AuthController::logout');
$routes->get('resendVerification', 'AuthController::resendVerification');
$routes->post('resendVerification', 'AuthController::resendVerification');


//Routes Untuk UserController
$routes->get('dashboard', 'UserController::dashboard');
$routes->post('dashboard', 'UserController::dashboard');
