<?php

namespace App\Controller;

use App\Repository\CommentaireRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PostRepository;



class StatController extends AbstractController
{
    #[Route('/stat', name: 'app_stat')]
    public function index(): Response
    {
        return $this->render('stat/index.html.twig', [
            'controller_name' => 'StatController',
        ]);
    }
    #[Route('/statback', name: 'stat')]
    public function stat(PostRepository $postRepository, CommentaireRepository $CommentaireRepository): Response
    {
        $totalPosts = $postRepository->count([]);
        $totalcommentaire = $CommentaireRepository->count([]);
        $averagecommentairePerPost = $totalPosts > 0 ? $totalcommentaire / $totalPosts : 0;

        return $this->render('back/stat.html.twig', [
            'totalPosts' => $totalPosts,
            'totalcommentaire' => $totalcommentaire,
            'averagecommentairePerPost' => $averagecommentairePerPost,
        ]);
    }
    private function getTotalPosts(PostRepository $postRepository): int
    {
        return count($postRepository->findAll());
    }

    private function getTotalComments(CommentaireRepository $CommentaireRepository): int
    {
        return count($CommentaireRepository->findAll());
    }
}
