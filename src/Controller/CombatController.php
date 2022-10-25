<?php

namespace App\Controller;

use App\Entity\Combat;
use App\Entity\User;
use App\Repository\CombatRepository;
use App\Repository\UserRepository;
use DateTimeImmutable;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/combat')]
class CombatController extends AbstractController
{
    #[Route('s', name: 'combat_list')]
    public function index(UserRepository $userRepository): Response
    {
        $users = $userRepository->findBy([], ['id' => 'DESC']);

        return $this->render('combat/index.html.twig', [
            'users' => $users,
        ]);
    }

    #[Route('/{id}/nouveau', name: 'combat_create')]
    public function create(User $userReception, EntityManagerInterface $entityManager)
    {
        $combat = (new Combat())
            ->setCreatedAt(new DateTimeImmutable())
            ->setUserDemande($this->getUser())
            ->setUserReception($userReception);
        $entityManager->persist($combat);
        $entityManager->flush();

        return $this->redirectToRoute('combat_attente', ['id' => $combat->getId()]);
    }

    #[Route('/{id}/attente', name: 'combat_attente')]
    public function wait(Combat $combat): Response
    {
        return $this->render('attente/index.html.twig', [
            'combat' => $combat,
        ]);
    }

    #[Route('/{id}/attente-data', name: 'combat_attente_data')]
    public function waitData(Combat $combat): Response
    {
        return $this->json([
            'started' => $combat->getStatus() === Combat::STATUS_EN_COUR,
            'url' => $this->generateUrl('combat_unity', ['id' => $combat->getId()]),
        ]);
    }

    #[Route('/{id}/accepter', name: 'combat_accept')]
    public function accept(Combat $combat, EntityManagerInterface $entityManager): Response
    {
        if ($this->getUser() !== $combat->getUserReception()) {
            throw new \Exception("Vous ne pouvez pas accepter ce combat.");
        }

        $combat->setStatus(Combat::STATUS_EN_COUR);
        $entityManager->flush();

        return $this->redirectToRoute('combat_unity', ['id' => $combat->getId()]);
    }

    #[Route('/ajax-data', name: 'combat_ajax_data')]
    public function ajaxData(CombatRepository $combatRepository)
    {
        $combats = $combatRepository->findUserCombatsByStatus($this->getUser(), Combat::STATUS_PENDING);
        $combatsArray = [];
        foreach ($combats as $combat) {
            $combatsArray[] = [
                ...$combat->toArray(),
                'url' => $this->generateUrl('combat_accept', ['id' => $combat->getId()]),
            ];
        }

        return $this->json([
            'combats' => $combatsArray,
        ]);
    }

    #[Route('/{id}/combatUnity', name: 'combat_unity')]
    public function fight(Combat $combat): Response
    {
        return $this->render('appUnity/index.html', [
            'combat' => $combat,
        ]);
    }
}
