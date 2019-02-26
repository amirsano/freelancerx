<?php
/**
 * Created by PhpStorm.
 * User: asano5
 * Date: 25.02.2019
 * Time: 20:16
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController
{
    /**
     * @Route("/")
     */
    public function index() {
        return new Response("Hi");
    }

    /**
     * @Route("/news/{harchi}")
     * @Parameter harchi
     */
    public function show($harchi){
        return new Response("harchi ".$harchi);
    }

}