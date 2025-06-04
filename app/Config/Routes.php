<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::index');
$routes->get('/data-mcu', 'Main::data_mcu');
$routes->get('/form-mcu', 'Main::medcheck');
$routes->get('/form-lab', 'Main::formlab');
$routes->get('/detail-mcu/(:num)', 'Main::detail_mcu/$1');
$routes->get('/detail-lab/(:num)', 'Main::detail_lab/$1');
$routes->get('/isi-lab/(:num)', 'Main::half_lab/$1');
$routes->get('/delete-lab/(:num)', 'Main::delete_lab/$1');
// post
$routes->post('/save-mcu', 'Main::save_mcu');
$routes->post('/save-lab', 'Main::save_lab');
$routes->post('/save-half-lab', 'Main::save_half_lab');
// Lab
$routes->get('/lab/single-test', 'Lab::index');
$routes->get('/lab/multiple-test', 'Lab::multiple');
$routes->post('/lab/saveTindakan', 'Lab::saveTindakan');
$routes->post('/lab/savePaket', 'Lab::savePaket');
$routes->post('/lab/saveNilaiNormal/(:num)', 'Lab::saveNilaiNormal/$1');
