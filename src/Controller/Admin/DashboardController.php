<?php

namespace App\Controller\Admin;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin')]
class DashboardController extends AbstractController
{
    #[Route('', name: 'admin_dashboard')]
    public function index(): Response
    {
        return $this->render('admin/dashboard/index.html.twig');
    }

    #[Route('/userGestion', name: 'user_gestion')]
    public function UserGestion(UserRepository $userRepository,Request $request): Response
    {
        if($q = $request->query->get('q'))
        {
            $users = $userRepository->search($q);
        }
        else
        {
            $users = $userRepository->findBy([],['id'=> 'DESC']);
        }

        
        return $this->render('admin/user/index.html.twig',[
            'users'=>$users,
        ]);
    }

    #[Route('/contactGestion', name: 'contact_gestion')]
    public function ContactGestiton(): Response
    {
        return $this->render('admin/contact/index.html.twig');
    }

}
