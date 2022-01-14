<?php

namespace App\Controller\User;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/m')]
class DashboardController extends AbstractController
{
    #[Route('/membre', name: 'membre')]
    public function index(): Response
    {
        return $this->render('user/membre/index.html.twig');
    }
}
