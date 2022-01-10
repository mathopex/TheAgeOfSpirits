<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/create')]
class PersoController extends AbstractController
{
    // #[Route('', name: 'perso')]
    // public function index(): Response
    // {
    //     return $this->render('perso/index.html.twig', [
            
    //     ]);
    // }
        // Création Personnage
    #[Route('', name: 'perso')]
    public function create(): Response
    {
        return $this->render('perso/create.html.twig', [
            
        ]);
    }
    // Suppression Personnage
    #[Route('/{slug}/delete', name: 'delete')]
    public function delete(): Response
    {
        return $this->redirectToRoute('perso');
    }

}


