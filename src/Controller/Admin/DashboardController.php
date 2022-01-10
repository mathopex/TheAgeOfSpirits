<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    #[Route('', name: 'admin_dashboard')]
    public function index(): Response
    {
        return $this->render('admin/dashboard/index.html.twig');
    }

    #[Route('/userGestion', name: 'user_gestion')]
    public function UserGestion(): Response
    {
        return $this->render('admin/dashboard/index.html.twig');
    }

    #[Route('/contactGestion', name: 'contact_gestion')]
    public function ContactGestiton(): Response
    {
        return $this->render('admin/dashboard/index.html.twig');
    }

}
