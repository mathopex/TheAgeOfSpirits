<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AttenteController extends AbstractController
{
    #[Route('/attente/{id}', name: 'attente')]
    public function index(): Response
    {
        return $this->render('attente/index.html.twig', [
            'controller_name' => 'AttenteController',
        ]);
    }
}
