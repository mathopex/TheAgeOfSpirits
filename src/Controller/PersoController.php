<?php

namespace App\Controller;

use App\Entity\Perso;
use App\Entity\User;
use App\Form\PersoFormType;
use App\Helper\PersoHelper;
use App\Repository\UserRepository;
use DateTimeImmutable;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/creation')]
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
    public function create(Request $request,EntityManagerInterface $entityManager, UserRepository $userRepository): Response
    {

        $userRepository = $entityManager->getRepository(User::class);
        /** @var User $user */
        $user = $this->getUser();
        $perso = $user->getPerso();
        

        if($perso->isValid() ) {
            return $this->redirectToRoute('membre');
        }

        $form = $this->createForm(PersoFormType::class, $perso);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $user = $userRepository->find($this->getUser());
            $perso->setCreatedAt(new DateTimeImmutable());
            $user->setPerso($perso);
            $entityManager->persist($perso);
            $entityManager->flush();

             $this->addFlash('success', "Vous avez bien créé votre personnage !");
            return $this->redirectToRoute('perso');

        }

         return $this->render('perso/create.html.twig', [
             'form' => $form->createView(),
             'persos' => PersoHelper::PERSOS,
         ]);
    }

    // Suppression Personnage
    #[Route('/delete', name: 'delete')]
    public function delete(EntityManagerInterface $entityManager): Response
   
    {   
        /** @var User $user */
        $user = $this->getUser();
        $perso = $user->getPerso();

        $perso 
        ->setpseudo('')
        ->setclan('')
        ->setclass('')
        ->setsex('')
        ;

        $entityManager->flush();

        return $this->redirectToRoute('perso');
    }

}


