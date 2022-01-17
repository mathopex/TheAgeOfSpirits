<?php

namespace App\Controller;

use App\Entity\Combat;
use App\Entity\User;
use App\Repository\CombatRepository;
use App\Repository\PersoRepository;
use App\Repository\UserRepository;
use DateTimeImmutable;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CombatController extends AbstractController
{
    #[Route('/combat', name: 'combat')]
    public function index(
        UserRepository $userRepository,
        EntityManagerInterface $entityManager
    ): Response {

        $user = new User();
        $users = $userRepository->findBy([], ['id' => 'DESC']);

        $combat = new Combat();
        $combat->setCreatedAt(new DateTimeImmutable());
        $combat->setUserDemande($this->getUser());
        $entityManager->persist($combat);
        $entityManager->flush();



        return $this->render('combat/index.html.twig', [
            'users' => $users,
            'combat' => $combat
        ]);
    }
}
