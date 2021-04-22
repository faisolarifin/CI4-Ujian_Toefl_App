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
$routes->setDefaultMethod('index');
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

$routes->get('/', 'Login::index');
//routing login
$routes->get('/auth', 'Login::index');
$routes->post('/auth', 'Login::auth');
$routes->get('/logout', 'Login::logout');
//routing section
$routes->get('/home', 'Section::index');
$routes->get('/section', 'Section::bagian');
$routes->get('/score', 'Section::score');
$routes->post('/direction', 'Section::direction');
$routes->get('/start', 'Section::start');
$routes->get('/finish', 'Section::finish');
$routes->get('/exam', 'Section::exam');
$routes->get('/exam/(:num)', 'Section::exam/$1');
$routes->post('/save/(:num)', 'Section::save/$1');
$routes->post('/continue', 'Section::continue');

//routing peserta
$routes->get('/peserta', 'Admin::index');
$routes->get('/peserta/tambah', 'Admin::tambahPeserta');
$routes->get('/peserta/(:num)/edit', 'Admin::editPeserta/$1');
$routes->post('/peserta', 'Admin::savePeserta');
$routes->delete('/peserta/(:num)', 'Admin::deletePeserta/$1');
$routes->put('/peserta', 'Admin::updatePeserta');
//routing section
$routes->get('/bagian', 'Admin::dataSection');
$routes->get('/bagian/(:num)/edit', 'Admin::editSection/$1');
$routes->put('/bagian', 'Admin::updateSection');
//routing soal
$routes->get('/soal', 'Admin::dataSoal');
$routes->get('/soal/reading', 'Admin::dataSoal/1');
$routes->get('/soal/listening', 'Admin::dataSoal/2');
$routes->get('/soal/structure', 'Admin::dataSoal/3');
$routes->get('/soal/tambah', 'Admin::tambahSoal');
$routes->get('/soal/(:num)/edit', 'Admin::editSoal/$1');
$routes->get('/topikby/(:num)', 'Admin::getTopicBySection/$1');
$routes->post('/soal', 'Admin::saveSoal');
$routes->delete('/soal/(:num)', 'Admin::deleteSoal/$1');
$routes->put('/soal', 'Admin::updateSoal');
//routing peserta
$routes->get('/topik', 'Admin::dataTopik');
$routes->get('/topik/article', 'Admin::dataTopik/1');
$routes->get('/topik/sound', 'Admin::dataTopik/2');
$routes->get('/topik/article/tambah', 'Admin::tambahTopik/1');
$routes->get('/topik/sound/tambah', 'Admin::tambahTopik/2');
$routes->get('/topik/article/(:num)/edit', 'Admin::editTopik/1/$1');
$routes->get('/topik/sound/(:num)/edit', 'Admin::editTopik/2/$1');
$routes->post('/topik/article', 'Admin::saveArticle');
$routes->post('/topik/sound', 'Admin::saveSound');
$routes->delete('/topik/(:num)', 'Admin::deleteArticle/$1');
$routes->delete('/topik/sound/(:num)', 'Admin::deleteSound/$1');
$routes->put('/topik/article', 'Admin::updateArticle');
$routes->put('/topik/sound', 'Admin::updateSound');
//hasil
$routes->get('/hasil', 'Admin::Hasil');

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
