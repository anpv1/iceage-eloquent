<?php
namespace App\Bootstrap;

class Services {
    private static $twig;

    public static function register($app){
        $app->register('Twig_Environment', '\\App\\Bootstrap\\Services::twig_service');
    }

    public static function twig_service(){
        if(!self::$twig){
            $loader = new \Twig_Loader_Filesystem(realpath('app/templates/views'));
            self::$twig = new \Twig_Environment($loader, array(
                'cache' => realpath('app/templates/cache'),
                'auto_reload' => true
            ));
        }

        return self::$twig;
    }
}
