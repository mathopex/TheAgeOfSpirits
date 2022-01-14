<?php

namespace App\Controller;

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
    public function home(): Response
    {
        return $this->render('base/homePage.html.twig');
    }


    #[Route('/combat', name: 'fight_page')]
    public function fight(): Response
    {
        return $this->render('base/homePage.html.twig');
    }
}
