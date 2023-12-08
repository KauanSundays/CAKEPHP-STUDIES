<?php

use Cake\Routing\RouteBuilder;
use Cake\Routing\Route\DashedRoute;

return function (RouteBuilder $routes): void {
    $routes->setRouteClass(DashedRoute::class);

    $routes->scope('/', function ($routes) {
        $routes->connect('/', ['controller' => 'Players', 'action' => 'index'], ['_name' => 'Players.index']);

        // Pages
        $routes->connect('/add', ['controller' => 'Players', 'action' => 'store'], ['_name' => 'Players.store']);
        $routes->connect('/edit/:id', ['controller' => 'Players', 'action' => 'edit'], ['_name' => 'Players.edit'])
            ->setPatterns(['id' => '\d+'])
            ->setPass(['id']);

        // Delete Action
        $routes->connect('/delete/:id', ['controller' => 'Players', 'action' => 'delete'], ['_name' => 'Players.delete'])
            ->setPatterns(['id' => '\d+'])
            ->setPass(['id']);

        // Register positions for players
        $routes->connect('/register-positions', ['controller' => 'Positions', 'action' => 'index'],
        ['__name' => 'Positions.index']);
    });
};
?>
