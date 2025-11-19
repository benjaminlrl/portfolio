<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');
$routes->get('/', 'c_home::index');
$routes->get('/projets', 'c_projets::index');
$routes->get('/connexion', 'c_connexion::index');
