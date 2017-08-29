<?php
namespace App\Bootstrap;
use Rfussien\Dotenv\Loader;

class Env {
    public static function load(){
        $dotenv = new Loader('app/');
        $dotenv->load();
    }
}
