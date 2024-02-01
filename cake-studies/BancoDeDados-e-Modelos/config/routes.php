<?php

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

return function (RouteBuilder $routes): void {

    $routes->setRouteClass(DashedRoute::class);

    $routes->scope('/', function (RouteBuilder $builder): void {
        $builder->connect('/', ['controller' => 'Products', 'action' => 'index']);
        $builder->connect('/add-product', ['controller' => 'Products', 'action' => 'add']);
    
        $builder->fallbacks();
    });
};
