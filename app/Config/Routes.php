<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);


// //API
// $routes->resource('api/siswa', ['controller' => 'Api\Siswa']);
/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */
$routes->resource('api/formulir', ['controller' => 'Api\Formulir']);
$routes->resource('api/transaksi', ['controller' => 'Api\Transaksi']);

$routes->post('api/auth/login', 'Api\Auth::login');
$routes->get('api/auth/logout', 'Api\Auth::logout');

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/', 'Auth::index');








$routes->get('/formulir', 'Formulir::index');
$routes->get('formulir/tambah', 'Formulir::tambah');
$routes->get('/formulir/dataAsalSekolah/(:num)', 'Formulir::dataAsalSekolah/$1');
$routes->post('/formulir/simpan', 'Formulir::simpan');
$routes->post('/formulir/getData', 'Formulir::getData');
$routes->get('formulir/edit/(:segment)', 'Formulir::edit/$1');
$routes->get('formulir/detail/(:segment)', 'Formulir::detail/$1');
$routes->post('formulir/update/(:segment)', 'Formulir::update/$1');
$routes->get('formulir/getSekolahByJenjang/(:num)', 'Formulir::getSekolahByJenjang/$1');




$routes->post('clear-cache', 'CacheController::clearCache');
$routes->post('clear-session', 'SessionController::clearSession');








// $routes->resource('api/home', ['controller' => 'Api\Home']);
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
