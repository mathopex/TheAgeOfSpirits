<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PreHomePageController extends AbstractController
{
    #[Route('', name: 'pre_home_page')]
    public function index(): Response
    {
        return $this->render('pre_home_page/index.html.twig');
    }
}
