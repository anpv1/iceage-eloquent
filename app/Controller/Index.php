<?php
namespace App\Controller;
use Twig_Environment as Twig;

class Index
{
    public static function get(Twig $twig)
    {
        return $twig->render('index/index.html');
    }
}
