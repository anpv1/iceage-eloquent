<?php
namespace App\Controller;
use App\Eloquent\TestTbl;
use Twig_Environment as Twig;
use Psr\Http\Message\RequestInterface;

class Hello
{
    public static function get(Twig $template, RequestInterface $request, $route_params)
    {
        $row = TestTbl::find($route_params['id']);
        return $template->render('hello/index.html', array('row' => $row));
    }
}
