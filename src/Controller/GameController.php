<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GameController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(): Response
    {
        $info = 'Bonjour les SIO2 !';
        return $this->render('index.html.twig', [
            'information' => $info
        ]);
    }

    #[Route('/go/{id}', name: 'app_go')]
    public function go(int $id): Response
    {
        $info = "La partie n°$id est lancée !";
        return new Response($info);
    }
}

