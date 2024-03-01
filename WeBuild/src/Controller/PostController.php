<?php

namespace App\Controller;

namespace App\Controller;
use App\Entity\Post;
use App\Entity\Commentaire;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PostRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;
use App\Form\PostType;
use App\Repository\CommentaireRepository;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use App\Form\CommentaireType as FormCommentaireType;
use Doctrine\Persistence\ManagerRegistry;

class PostController extends AbstractController
{
    #[Route('/addPost', name: 'addPost')]
    public function addPost(PostRepository $repo, EntityManagerInterface $em,HttpFoundationRequest $request)
    {
        $post = new Post();
        $form = $this->createForm(PostType::class, $post);
        $form->add('add',SubmitType::class);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($post);
            $em->flush();
            return $this->redirectToRoute('showPost');  
        }

        return $this->render('post/addpost.html.twig', [
            'f' => $form->createView()
        ]);
    }

    #[Route('/editPost{id}', name: 'editPost')]
    public function editPost($id,PostRepository $repo, EntityManagerInterface $em,HttpFoundationRequest $request)
    {
        $post =$repo->find($id);
        $form = $this->createForm(PostType::class, $post);
        $form->add('modifier',SubmitType::class);

        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($post);
            $em->flush();
            return $this->redirectToRoute('showPost');
        }

        return $this->render('post/addPost.html.twig', [
            'f' => $form->createView()
        ]);
    }

    #[Route('/deletePost/{id}', name: 'deletePost')]
    public function deletePost($id,PostRepository $repo,EntityManagerInterface $em): Response
    {
        $post=$repo->find($id);
        $em->remove($post);
        $em->flush();
        return $this->redirectToRoute('showPost');


    }

    #[Route('/showPost/{id}', name: 'detailPost')]
    public function detail(ManagerRegistry $doctrine,$id): Response
    {
        // Récupérer le post spécifique par son ID
        $repo=$doctrine->getRepository(Post::class);
        $post = $repo->find($id);
        $commRepo = $doctrine->getRepository(Commentaire::class);
        $commentaires = $post->getComments();

        // Vérifier si le post existe
        if (!$post) {
           $this -> addFlash('error' ,"l'id $id de ce post n'existe pas");
           return $this->redirectToRoute('showPost');
        }// In your controller before rendering the template
dump($commentaires);
        return $this->render('post/detailPost.html.twig',
        ['post'=>$post,'commentaires' => $commentaires
    ]);
        }
        
        #[Route('/showPost', name: 'showPost')]
        public function showPost(PostRepository $repo): Response
        {
            $post=$repo->findAll();
          
            return $this->render('post/show.html.twig',[
                'post'=>$post,
              
            ]); 
        }
    
}
