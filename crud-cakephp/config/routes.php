<?php

use Cake\Routing\RouteBuilder;
use Cake\Routing\Route\DashedRoute;

return function ($routes) {
    $routes->setRouteClass(DashedRoute::class);

    $routes->scope('/', function ($routes) {
        $routes->connect('/:controller/:action/:id', [], ['id' => '\d+', 'pass' => ['id']])
            ->setPatterns(['id' => '\d+']);

        $routes->connect('/', ['controller' => 'Players', 'action' => 'index'], ['_name' => 'Players.index']);

        // Páginas
        $routes->connect('/add', ['controller' => 'Players', 'action' => 'store'], ['_name' => 'Players.store']);
        $routes->connect('/edit/:id', ['controller' => 'Players', 'action' => 'edit'], ['_name' => 'Players.edit']);
        $routes->connect('/delete/:id', ['controller' => 'Players', 'action' => 'delete'], ['_name' => 'Players.delete'])
            ->setPatterns(['id' => '\d+'])
            ->setPass(['id']);

        // Registro de posições para jogadores
        $routes->connect('/register-positions', ['controller' => 'Positions', 'action' => 'index'],
            ['__name' => 'Positions.index']);
    });
};
