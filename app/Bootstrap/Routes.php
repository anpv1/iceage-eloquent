<?php
namespace App\Bootstrap;

class Routes {
    public static function register($app){
        // routes definition
        $app->get('/', '\\App\\Controller\\Index::get');
        $app->get('/blog(/:year/(:month/(:day)?)?)?', function($route_params){
            return $route_params;
        });
        $app->route(
            '/hello/:id', 
            '\\App\\Controller\\Hello::get', 
            'GET|POST'
        );
    }
}
