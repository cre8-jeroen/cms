<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::plugin(
    'Frontend',
    ['path' => '/frontend'],
    function (RouteBuilder $routes) {
        $routes->fallbacks(DashedRoute::class);
    }
);