<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/checknumber', 'Number::checkNumber');
$routes->post('/getsegitiga', 'Number::segitiga');
$routes->post('/getprima', 'Number::prima');
$routes->post('/getganjil', 'Number::ganjil');
 
