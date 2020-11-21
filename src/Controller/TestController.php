<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TestController
{
public function index(){
    dd("ca fonctionne");
}

    public function test(Request $request, $age)
    {

        //$age = $request->attributes->get('age');

        return new Response("vous avez $age ans");
    }
}