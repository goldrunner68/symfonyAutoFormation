<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestHello{

    /**
     * @Route("/hello/{rep<\d+>?0}", name ="hello" methods={"GET", "POST"}, host="127.0.0.1", schemes={"http", "https"})
     * *
     * @param Request $request
     * @param $rep
     * @return Response
     */

public function hello(Request $request , $rep){

    return new Response("Hello $rep");
}

}