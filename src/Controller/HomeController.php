<?php

namespace App\Controller;

use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    #[Route('/')]
    public function index(): Response
    {
        return new Response("Home Controller");
    }
}