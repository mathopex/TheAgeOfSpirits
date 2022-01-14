<?php

namespace App\Controller;

use App\Entity\Perso;
use App\Form\PersoFormType;
use DateTimeImmutable;
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
    public function create(Request $request,EntityManagerInterface $entityManager): Response
    {

        $perso = new Perso();
        $form = $this->createForm(PersoFormType::class, $perso);
        $form->handleRequest($request);
 
        if($form->isSubmitted() && $form->isValid())
        {
            $perso->setCreatedAt(new DateTimeImmutable());
             $entityManager->persist($perso);
             $entityManager->flush();
 
             $this->addFlash('success', "Vous avez bien créé votre personnage !");
            return $this->redirectToRoute('perso');
 
        }
         return $this->render('perso/create.html.twig',
     [
         'form' => $form->createView(),
     ]);

    }

    // Suppression Personnage
    #[Route('/{slug}/delete', name: 'delete')]
    public function delete(): Response
    {
        return $this->redirectToRoute('perso');
    }

}


