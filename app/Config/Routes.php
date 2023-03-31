<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('unidades', 'Unidades::uni');
$routes->get('nuevo', 'Unidades::nuevo');
$routes->post('insertar', 'Unidades::insertar');
$routes->get('editar/(:num)', 'Unidades::editar/$1');
$routes->post('actualizar', 'Unidades::actualizar');
$routes->get('eliminar/(:num)', 'Unidades::eliminar/$1');
$routes->get('eliminados', 'Unidades::eliminados');
$routes->get('reingresar/(:num)', 'Unidades::reingresar/$1');

$routes->get('categorias', 'Categorias::uni');
$routes->get('nuevo-categorias', 'Categorias::nuevo');
$routes->post('insertar-categorias', 'Categorias::insertar');
$routes->get('editar-categorias/(:num)', 'Categorias::editar/$1');
$routes->post('actualizar-categorias', 'Categorias::actualizar');
$routes->get('eliminar-categorias/(:num)', 'Categorias::eliminar/$1');
$routes->get('eliminados-categorias', 'Categorias::eliminados');
$routes->get('reingresar-categorias/(:num)', 'Categorias::reingresar/$1');



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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
