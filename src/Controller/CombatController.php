<?php

namespace App\Controller;

use App\Repository\PersoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CombatController extends AbstractController
{
    #[Route('/combat', name: 'combat')]
    public function index(PersoRepository $persoRepository): Response
    {

        $persos = $persoRepository->findBy([],['id'=> 'DESC']);

        // REQUET SQL : SUR CETTE PAGE ON AFFICHE LE NOM DES JOUEURS CONNECTE + LEUR NIVEAU EN FONCTION
        // DU NIVEAU DU JOUEUR ACTUEL 

        

        return $this->render('combat/index.html.twig', [
            'persos' => $persos,
        ]);
    }
}
