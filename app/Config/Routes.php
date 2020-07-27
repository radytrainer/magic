<?php namespace Config;

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
$routes->setDefaultController('UserController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->add('/', 'UserController::index');
$routes->add('create', 'UserController::createUser');
$routes->add('remove/(:num)', 'UserController::deleteUser/$1');
$routes->add('update', 'UserController::updateUser');
$routes->add('send-email', 'TestMail::index');

//Email
$routes->add('email', 'SendEmail::index');
$routes->add('email/send', 'SendEmail::sendEmail');

$routes->group('province', function($routes) {
	$routes->add('/', 'ProvinceController::index');
	$routes->add('create', 'ProvinceController::createProvince');
	$routes->add('remove/(:num)', 'ProvinceController::deleteProvince/$1');
	$routes->add('update', 'ProvinceController::updateProvince');
});

$routes->group('subject', function($routes) {
	$routes->add('/', 'SubjectController::index');
	$routes->add('create', 'SubjectController::createSubject');
	$routes->add('remove/(:num)', 'SubjectController::deleteSubject/$1');
	$routes->add('update', 'SubjectController::updateSubject');
});


/**
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
