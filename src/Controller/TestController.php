<?php
/**
 * Created by PhpStorm.
 * User: asano5
 * Date: 25.02.2019
 * Time: 20:16
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index() {
        return new Response("Hi");
    }

    /**
     * @Route("/news/{harchi}")
     *
     */
    public function show($harchi){

        $comments = [
            'dkfhs hkjhkff',
            'skdjfjsg jfgjsgjhfgj sf',
            'sjdfgsgfjsbdjfsjdfjsgjdhgfjhsgjdf'
        ];
        return $this->render ('test/show.html.twig', [
            'name' => 'amir',
            'Beruf' => 'IT',
            'satz' => $harchi,
            'comments' => $comments,
        ]);


    }

}