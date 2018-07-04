<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::plugin(
    'Backend',
    ['path' => '/admin'],
    function (RouteBuilder $routes) {
    	$routes->connect('/', ['controller' => 'Pages', 'action' => 'dashboard']);
 		
        $routes->fallbacks(DashedRoute::class);
    }
);
