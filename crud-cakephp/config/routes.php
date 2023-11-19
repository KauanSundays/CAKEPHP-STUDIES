<?php

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

return function (RouteBuilder $routes): void {
    $routes->scope('/', function (RouteBuilder $builder): void {
        $builder->connect('/', ['controller' => 'Home', 'action' => 'index']);
        // Adicione outras rotas conforme necessário

        $builder->connect('/user/edit/:id', ['controller' => 'User', 'action' => 'edit'], ['id' => '\d+', 'pass' => ['id']]);
        // ... outras rotas ...
    });
};
