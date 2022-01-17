<?php

namespace App\Controller;

use App\Repository\CombatRepository;
use App\Repository\PersoRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UnityController extends AbstractController
{
    #[Route('/unityPseudoDemande', name: 'unity_pseudo_demande')]
    public function index(UserRepository $userRepository ,PersoRepository $persoRepository, CombatRepository $combatRepository): Response
    {
        $user = $userRepository->find($this->getUser());
       
        $perso = $user->getPerso();
        return $this->render('appUnity/php/PourUnity/PseudoPersoDemande.html.twig', [
            'persos' => $perso,
        ]);
    }


    #[Route('/unityClanDemande', name: 'unity_clan_demande')]
    public function clanDemande(UserRepository $userRepository ,PersoRepository $persoRepository, CombatRepository $combatRepository): Response
    {
        $user = $userRepository->find($this->getUser());
       
        $perso = $user->getPerso();
        return $this->render('appUnity/php/PourUnity/ClanPersoDemande.html.twig', [
            'persos' => $perso,
        ]);
    }
    
    #[Route('/unityClassDemande', name: 'unity_class_demande')]
    public function Classdemande(UserRepository $userRepository ,PersoRepository $persoRepository, CombatRepository $combatRepository): Response
    {
        $user = $userRepository->find($this->getUser());
       
        $perso = $user->getPerso();
        return $this->render('appUnity/php/PourUnity/ClassPersoDemande.html.twig', [
            'persos' => $perso,
        ]);
    }


    #[Route('/unitySexDemande', name: 'unity_sex_demande')]
    public function SexDemande(UserRepository $userRepository ,PersoRepository $persoRepository, CombatRepository $combatRepository): Response
    {
        $user = $userRepository->find($this->getUser());
       
        $perso = $user->getPerso();
        return $this->render('appUnity/php/PourUnity/SexPersoDemande.html.twig', [
            'persos' => $perso,
        ]);
    }

    #[Route('/unityPseudoReception', name: 'unity_pseudo_reception')]
    public function PseudoReception(UserRepository $userRepository ,PersoRepository $persoRepository, CombatRepository $combatRepository): Response
    {
        $user = $userRepository->find($this->getUser());
       
        $perso = $user->getPerso();
        return $this->render('appUnity/php/PourUnity/PseudoPersoReception.html.twig', [
            'persos' => $perso,
        ]);
    }
    #[Route('/unityClanReception', name: 'unity_clan_reception')]
    public function ClanReception(UserRepository $userRepository ,PersoRepository $persoRepository, CombatRepository $combatRepository): Response
    {
        $user = $userRepository->find($this->getUser());
       
        $perso = $user->getPerso();
        return $this->render('appUnity/php/PourUnity/ClanPersoReception.html.twig', [
            'persos' => $perso,
        ]);
    }

    #[Route('/unityClassReception', name: 'unity_class_reception')]
    public function ClassReception(UserRepository $userRepository ,PersoRepository $persoRepository, CombatRepository $combatRepository): Response
    {
        $user = $userRepository->find($this->getUser());
       
        $perso = $user->getPerso();
        return $this->render('appUnity/php/PourUnity/ClassPersoReception.html.twig', [
            'persos' => $perso,
        ]);
    }
    #[Route('/unitySexReception', name: 'unity_sex_reception')]
    public function SexReception(UserRepository $userRepository ,PersoRepository $persoRepository, CombatRepository $combatRepository): Response
    {
        $user = $userRepository->find($this->getUser());
       
        $perso = $user->getPerso();
        return $this->render('appUnity/php/PourUnity/SexPersoReception.html.twig', [
            'persos' => $perso,
        ]);
    }

    
    

}
