<?php

namespace App\Controller\Admin;

use App\Entity\Contact;
use App\Entity\News;
use App\Form\NewsType;
use DateTimeImmutable;
use App\Repository\ContactRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/m/admin')]
class DashboardController extends AbstractController
{

    #[Route('', name: 'admin_dashboard')]
    public function index(): Response
    {
        return $this->render('admin/dashboard/index.html.twig');
    }

    #[Route('/userGestion', name: 'user_gestion')]
    public function UserGestion(UserRepository $userRepository, Request $request): Response
    {
        if ($q = $request->query->get('q')) {
            $users = $userRepository->search($q);
        } else {
            $users = $userRepository->findBy([], ['id' => 'DESC']);
        }


        return $this->render('admin/user/index.html.twig', [
            'users' => $users,
        ]);
    }

    #[Route('/contactGestion', name: 'contact_gestion')]
    public function ContactGestiton(ContactRepository $contactRepository, Request $request): Response
    {

        if ($q = $request->query->get('q')) {
            $contacts = $contactRepository->search($q);
        } else {
            $contacts = $contactRepository->findBy([], ['id' => 'DESC']);
        }


        return $this->render('admin/contact/index.html.twig', [
            'contacts' => $contacts,
        ]);
    }

    #[Route('#{id}', name: 'admin_contact_view')]
    public function view(Contact $contact): Response
    {
        return $this->render('admin/contact/view.html.twig', [
            'contact' => $contact,
        ]);
    }

    #[Route('/{id}/delete', name: 'admin_contact_delete')]
    public function delete(Contact $contact, EntityManagerInterface $entityManager): RedirectResponse
    {
        $entityManager->remove($contact);
        $entityManager->flush();
        $this->addFlash('success', "Demande supprimée.");
        return $this->redirectToRoute('contact_gestion');
    }


    #[Route('/News', name: 'News')]
    public function create_news(Request $request, EntityManagerInterface $entityManager): Response
    {
        $news = new News();
        $form = $this->createForm(NewsType::class, $news);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $news->setCreatedAt(new DateTimeImmutable());
            $entityManager->persist($news);
            $entityManager->flush();

            // 1. Afficher un message de succès
            $this->addFlash('success', "Nous avons bien reçu votre message.");

            return $this->redirectToRoute('news');
        }
        return $this->render('admin/news/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
