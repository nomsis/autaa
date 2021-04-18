<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('hlavni');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::hlavni');
$routes->get('pridatDil', 'Home::pridatDil');
$routes->post('zapsatDil', 'Home::zapsatDil');
$routes->get('upravaDilu/(:num)','Home::upravaDilu/$1');
$routes->put('zapsatUpravuDilu/(:num)','Home::zapsatUpravuDilu/$1');
$routes->get('smazatDil/(:num)','Home::smazatDil/$1');
$routes->get('dily','Home::vypisDilu');

$routes->get('pridatZakaznika', 'Home::pridatZakaznika');
$routes->post('zapsatZakaznika', 'Home::zapsatZakaznika');
$routes->get('upravaZakaznika/(:num)','Home::upravaZakaznika/$1');
$routes->put('zapsatUpravuZakaznika/(:num)','Home::zapsatUpravuZakaznika/$1');
$routes->get('smazatZakaznika/(:num)','Home::smazatZakaznika/$1');
$routes->get('Zakaznici','Home::vypisZakazniku');

$routes->get('pridatZamestnance', 'Home::pridatZamestnance');
$routes->post('zapsatZamestnance', 'Home::zapsatZamestnance');
$routes->get('upravaZamestnance/(:num)','Home::upravaZamestnance/$1');
$routes->put('zapsatUpravuZamestnance/(:num)','Home::zapsatUpravuZamestnance/$1');
$routes->get('smazatZamestnance/(:num)','Home::smazatZamestnance/$1');
$routes->get('Zamestnanci','Home::vypisZamestnancu');

$routes->get('pridatOpravu', 'Home::pridatOpravu');
$routes->post('zapsatOpravy', 'Home::zapsatOpravy');
$routes->get('upravaOpravy/(:num)','Home::upravaOpravy/$1');
$routes->put('zapsatUpravuOpravy/(:num)','Home::zapsatUpravuOpravy/$1');
$routes->get('smazatOpravu/(:num)','Home::smazatOpravu/$1');
$routes->get('opravy','Home::vypisOpravy');

	$routes->group('auth', ['namespace' => 'IonAuth\Controllers'], function ($routes) {
	$routes->add('login', 'Auth::login');
	$routes->get('logout', 'Auth::logout');
	$routes->add('forgot_password', 'Auth::forgot_password');

	
	

	//$routes->add('login', 'Auth::login');
	//$routes->add('create_user', 'Auth::create_user');
	//$routes->get('logout', 'Auth::logout');
	//$routes->add('forgot_password', 'Auth::forgot_password');
	// $routes->get('/', 'Auth::index');
	// $routes->add('create_user', 'Auth::create_user');
	// $routes->add('edit_user/(:num)', 'Auth::edit_user/$1');
	// $routes->add('create_group', 'Auth::create_group');
	// $routes->get('activate/(:num)', 'Auth::activate/$1');
	// $routes->get('activate/(:num)/(:hash)', 'Auth::activate/$1/$2');
	// $routes->add('deactivate/(:num)', 'Auth::deactivate/$1');
	// $routes->get('reset_password/(:hash)', 'Auth::reset_password/$1');
	// $routes->post('reset_password/(:hash)', 'Auth::reset_password/$1');
	// ...

});
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
