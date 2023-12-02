<?php

use Cake\Routing\RouteBuilder;

return function (RouteBuilder $routes): void {
    $routes->setRouteClass(DashedRoute::class);

    $routes->scope('/', function ($routes) {
        $routes->connect('/', ['controller' => 'Players', 'action' => 'index'], ['_name' => 'Players.index']);
        $routes->connect('/add', ['controller' => 'Players', 'action' => 'store'], ['_name' => 'Players.store']);
        $routes->connect('/edit/:id', ['controller' => 'Players', 'action' => 'edit'], ['_name' => 'Players.edit'])
            ->setPatterns(['id' => '\d+'])
            ->setPass(['id']);
        $routes->connect('/delete/:id', ['controller' => 'Players', 'action' => 'delete'], ['_name' => 'Players.delete'])
            ->setPatterns(['id' => '\d+'])
            ->setPass(['id']);
    });
};
?>
