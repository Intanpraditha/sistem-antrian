<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

$routes->get('/', 'PasienController::index');
$routes->get('pasien', 'PasienController::index');
$routes->get('pasien/detail/(:num)', 'PasienController::detail/$1');
$routes->get('pasien/create', 'PasienController::create');
$routes->post('pasien/store', 'PasienController::store');
$routes->get('pasien/edit/(:num)', 'PasienController::edit/$1');
$routes->post('pasien/update/(:num)', 'PasienController::update/$1');
$routes->get('pasien/delete/(:num)', 'PasienController::delete/$1');

$routes->get('antrian', 'AntrianController::index');
$routes->get('antrian/create', 'AntrianController::create');
$routes->post('antrian/store', 'AntrianController::store');
$routes->get('antrian/edit/(:num)', 'AntrianController::edit/$1');
$routes->post('antrian/update/(:num)', 'AntrianController::update/$1');
$routes->get('antrian/delete/(:num)', 'AntrianController::delete/$1');
$routes->get('antrian/detail/(:num)', 'AntrianController::detail/$1');

$routes->get('dokter', 'DokterController::index');
$routes->get('dokter/create', 'DokterController::create');
$routes->post('dokter/store', 'DokterController::store');
$routes->get('dokter/edit/(:num)', 'DokterController::edit/$1');
$routes->post('dokter/update/(:num)', 'DokterController::update/$1');
$routes->get('dokter/delete/(:num)', 'DokterController::delete/$1');
$routes->get('dokter/detail/(:num)', 'DokterController::detail/$1');

$routes->get('admin', 'AdminController::index');
$routes->get('admin/create', 'AdminController::create');
$routes->post('admin/store', 'AdminController::store');
$routes->get('admin/edit/(:num)', 'AdminController::edit/$1');
$routes->post('admin/update/(:num)', 'AdminController::update/$1');
$routes->get('admin/delete/(:num)', 'AdminController::delete/$1');
$routes->get('admin/detail/(:num)', 'AdminController::detail/$1');

