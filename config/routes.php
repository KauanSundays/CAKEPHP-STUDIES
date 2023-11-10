<?php
use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

return function (RouteBuilder $routes): void {

    $routes->setRouteClass(DashedRoute::class);

    $routes->scope('/', function (RouteBuilder $builder): void {

        $builder->connect('/teste', ['controller' => 'Home', 'action' => 'index']);
        //controller => NOME_DO__CONTROLLER, ACTION => NOME_DO_METODO

        $builder->connect('/pages/*', 'Pages::display');

        $builder->fallbacks();
    });

};
