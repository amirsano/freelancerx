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
     * @Route("/", name="xxx")
     */
    public function index() {
        return new Response("Hi");
    }

    /**
     * @Route("/news/{harchi}/{chichi}", name="showmal")
     *
     */
    public function show($harchi, $chichi){

        $comments = [
            'dkfhs hkjhkff',
            'skdjfjsg jfgjsgjhfgj sf',
            'sjdfgsgfjsbdjfsjdfjsgjdhgfjhsgjdf'
        ];

        //dump($harchi, $this);

        return $this->render ('test/show.html.twig', [
            'name' => 'amir',
            'Beruf' => 'IT',
            'satz' => $harchi,
            'satz2' => $chichi,
            'comments' => $comments,
        ]);


    }

}