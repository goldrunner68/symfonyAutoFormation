<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class TestController
{
public function index(){
    dd("ca fonctionne");
}

    /**
     * @Route("/test/{age<\d+>?0}", name="test", methods={"GET", "POST"}, host="localhost", schemes={"http", "https"})
     * @param Request $request
     * @param $age
     * @return Response
     */

    public function test(Request $request, $age)
    {

        //$age = $request->attributes->get('age');

        return new Response("vous avez $age ans");
    }
}