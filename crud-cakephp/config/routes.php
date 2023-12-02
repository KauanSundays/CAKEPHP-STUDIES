<?php
// config/routes.php

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

return function (RouteBuilder $routes): void {
    $routes->get(
        '/',['controller' => 'Players', 'action' => 'index'], 'Players.index'
    );

    $routes->post(
        '/add', ['controller' => 'Players', 'action' => 'store'], 'Players.store'
    );

    $routes->get('/edit/:id', ['controller' => 'Players', 'action' => 'edit'], 'Players.edit')
        ->setPatterns(['id' => '\d+'])
        ->setPass(['id']);
};
