<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::login');
$routes->post('loginprocess', 'Auth::loginProcess');
$routes->get('logoutprocess', 'Auth::logoutProcess');

$routes->get('average-income', 'AverageIncome::index');
$routes->get('average-income/add', 'AverageIncome::create');
$routes->post('average-income/store', 'AverageIncome::store');
$routes->get('average-income/detail/(:any)', 'AverageIncome::detail/$1');
$routes->get('average-income/edit/(:any)', 'AverageIncome::edit/$1');
$routes->put('average-income/update/(:any)', 'AverageIncome::update/$1');
$routes->put('average-income/delete/(:segment)', 'AverageIncome::destroy/$1');

$routes->get('test', 'Test::index');
$routes->get('test2', 'Test::test2');
$routes->get('test3', 'Test::test3');
$routes->get('test4', 'Test::test4');
$routes->get('test5', 'Test::test5');