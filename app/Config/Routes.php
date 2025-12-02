<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/projets', 'Projets::index');
$routes->get('/portefeuille_de_competences', 'Home::portefeuilleDeCompetences');
