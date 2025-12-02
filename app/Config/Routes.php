<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');
$routes->get('/portefeuille_de_competences', 'HomeController::portefeuilleDeCompetences');
