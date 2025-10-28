<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */


$routes->get('/', 'Page::index');


$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
// ... route lain ...
$routes->get('/contact', 'Page::contact');
$routes->post('/contact/send', 'Page::saveContact'); 
$routes->get('/profile', 'Page::profile');
// ...
$routes->get('/profile', 'Page::profile');