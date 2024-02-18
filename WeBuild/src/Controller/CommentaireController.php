<?php

namespace App\Controller;

use App\Entity\Commentaire;
use App\Form\CommentaireType;
use App\Repository\CommentaireRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Post;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;


class CommentaireController extends AbstractController
{
    #[Route('/commentaire', name: 'app_commentaire')]
    public function index(): Response
    {
        return $this->render('commentaire/index.html.twig', [
            'controller_name' => 'CommentaireController',
        ]);
    }


    #[Route('/showCommentaire', name: 'showCommentaire')]
    public function showCommentaire(CommentaireRepository $repo): Response
    {
        $commentaire=$repo->findAll();
        return $this->render('commentaire/showCommentaire.html.twig',[
            'commentaire'=>$commentaire
        ]); 
    }
    #[Route('/addCommentaire', name: 'addCommentaire')]
    public function addCommentaire(CommentaireRepository $repo, EntityManagerInterface $em,HttpFoundationRequest $request)
    {
        $commentaire = new Commentaire();
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->add('add',SubmitType::class);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($commentaire);
            $em->flush();
            return $this->redirectToRoute('showPost');  
        }

        return $this->render('commentaire/addCommentaire.html.twig', [
            'f' => $form->createView()
        ]);
    }

    #[Route('/editCommentaire{id}', name: 'editCommentaire')]
    public function editCommentaire($id,CommentaireRepository $repo, EntityManagerInterface $em,HttpFoundationRequest $request)
    {
        $commentaire =$repo->find($id);
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->add('modifier',SubmitType::class);

        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($commentaire);
            $em->flush();
            return $this->redirectToRoute('showPost');
        }

        return $this->render('commentaire/addCommentaire.html.twig', [
            'f' => $form->createView()
        ]);
    }

    #[Route('/deleteCommentaire/{id}', name: 'deleteCommentaire')]
    public function deleteCommentaire($id,CommentaireRepository $repo,EntityManagerInterface $em): Response
    {
        $commentaire=$repo->find($id);
        $em->remove($commentaire);
        $em->flush();
        return $this->redirectToRoute('showPost');
    }
    
    #[Route('/deleteCommentaireBack/{id}', name: 'deleteCommentaireBack')]
    public function deleteCommentaireBack($id,CommentaireRepository $repo,EntityManagerInterface $em): Response
    {
        $commentaire=$repo->find($id);
        $em->remove($commentaire);
        $em->flush();
        return $this->redirectToRoute('showPostBack');
    }
}
