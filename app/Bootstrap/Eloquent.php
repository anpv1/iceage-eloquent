<?php
namespace App\Bootstrap;
use Illuminate\Database\Capsule\Manager as Capsule;

class Eloquent {
    public static function boot(){
        $capsule = new Capsule;

        $capsule->addConnection([
            'driver'    => 'mysql',
            'host'      => $_ENV['DB_HOST'],
            'database'  => $_ENV['DB_NAME'],
            'username'  => $_ENV['DB_USER'],
            'password'  => $_ENV['DB_PASSWORD'],
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]);

        // Make this Capsule instance available globally via static methods
        $capsule->setAsGlobal();

        // Setup the Eloquent ORM.
        $capsule->bootEloquent();

        return $capsule;
    }
}