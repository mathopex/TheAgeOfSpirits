<?php

namespace App\Controller;

use App\Repository\NewsRepository;
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
    public function home(PersoRepository $persoRepository, NewsRepository $newsRepository): Response
    {
        $persos = $persoRepository->findBy([], ['id' => 'DESC']);
        $news = $newsRepository->findBy([], ['id' => 'DESC']);
        return $this->render('base/homePage.html.twig', [
            'persos' => $persos,
            'news' => $news,
        ]);
    }
}
