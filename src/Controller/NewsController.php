<?php

namespace App\Controller;

use App\Entity\News;
use App\Form\NewsType;
use App\Repository\NewsRepository;
use DateTimeImmutable;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NewsController extends AbstractController
{
    #[Route('/news', name: 'news')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
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

    #[Route('/m/newsletter', name: 'newsletter')]
    public function newsLetter(NewsRepository $newsRepository): Response {
        $news = $newsRepository->findBy([], ['id' => 'DESC']);
        return $this->render('newsletter/newsletter.html.twig', [
            'news' => $news,
        ]);
    }
}
