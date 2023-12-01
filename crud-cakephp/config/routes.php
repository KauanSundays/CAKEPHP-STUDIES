<?php

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

return function (RouteBuilder $routes): void {
    // $routes->scope('/', function (RouteBuilder $builder): void {
    //     $builder->connect('/teste', ['controller' => 'Home', 'action' => 'index'],
    //     options: ['_name' => 'home.index']);
    //     //controller => NOME_DO__CONTROLLER, ACTION => NOME_DO_METODO
    // });

    $routes->get(
        '/',['controller' => 'Players', 'action' => 'index'], 'Players.index'
    );

    $routes->post(
        '/', ['controller' => 'Players', 'action' => 'store'], 'Players.store'
    );

    $routes->post(
        '/', ['controller' => 'Players', 'action' => 'delete'], 'Players.delete'
    );

    $routes->get('/edit/:id', ['controller' => 'Players', 'action' => 'edit'], 'Players.edit')
        ->setPatterns(['id' => '\d+'])
        ->setPass(['id']);
};
