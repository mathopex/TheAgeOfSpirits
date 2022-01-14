<?php

namespace App\Controller;

use App\Repository\PersoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BaseController extends AbstractController
{
    #[Route('', name: 'pre_home_page')]
    public function index(): Response
    {
        return $this->render('base/preHomePage.html.twig');
    }

    #[Route('/accueil', name: 'home_page')]
    public function home(PersoRepository $persoRepository): Response
    {
        $persos = $persoRepository->findBy([], ['nbVictoire' => 'DESC']);
        return $this->render('base/homePage.html.twig', [
            'persos' => $persos
        ]);
    }


    #[Route('/combatUnity', name: 'fight_page')]
    public function fight(): Response
    {
        return $this->render('appUnity/index.html');
    }
}
