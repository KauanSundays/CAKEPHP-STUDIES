<?php
use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

return function (RouteBuilder $routes): void {
    // $routes->scope('/', function (RouteBuilder $builder): void {
    //     $builder->connect('/teste', ['controller' => 'Home', 'action' => 'index'],
    //     options: ['_name' => 'home.index']);
    //     //controller => NOME_DO__CONTROLLER, ACTION => NOME_DO_METODO
    // });

    $routes->get('/about', 
        ['controller' => 'About', 'action' => 'index'], 
        'about.index');
};
