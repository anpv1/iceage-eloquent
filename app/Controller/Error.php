<?php
namespace App\Controller;
use Twig_Environment as Twig;

class Error {
    public static function error(Twig $template, $error){
        return $template->render('error/index.html', array('error' => $error, 'debug' => $_ENV['DEBUG_MODE']));
    }
}
