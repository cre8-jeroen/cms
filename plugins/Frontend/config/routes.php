<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::plugin(
    'Frontend',
    ['path' => '/'],
    function (RouteBuilder $routes) {

 		$routes->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);
 		
        $routes->fallbacks(DashedRoute::class);
    }
);


