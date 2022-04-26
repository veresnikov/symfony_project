<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HelloWorldController extends AbstractController
{
    public function index(): Response
    {
        return new Response(json_encode([
            'message' => 'Hello World!',
        ]));
    }
}