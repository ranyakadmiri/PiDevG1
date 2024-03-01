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
use SensioLabs\Security\SecurityChecker;
use Symfony\Component\Mailer\Mailer ;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mime\Email;

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
    private function filterBadWords($content)
    {
        $badWords = ['esprit', 'blabla', 'lol']; // Liste de mots inappropriés

        foreach ($badWords as $badWord) {
            $content = preg_replace('/\b' . preg_quote($badWord, '/') . '\b/i', '*****', $content);
        }

        return $content;
    }
    #[Route('/addCommentaire', name: 'addCommentaire')]
    public function addCommentaire(CommentaireRepository $repo, EntityManagerInterface $em,HttpFoundationRequest $request)
    {
        $commentaire = new Commentaire();
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->add('add',SubmitType::class);
        $form->handleRequest($request);
        
        
        if ($form->isSubmitted() && $form->isValid()) {
           // $filteredContenu = $this->filterBadWords($contenu);
           // $commentaire->setContenu($filteredContenu);

           $contenu = $commentaire->getContenu(); // Récupérer le contenu du commentaire

           // Liste de mots inappropriés
           $badWords = ['lol', 'esprit', 'blabla'];
   
           // Remplacer les mots inappropriés par des étoiles dans le contenu
           foreach ($badWords as $badWord) {
               $contenu = preg_replace('/\b' . preg_quote($badWord, '/') . '\b/i', '*****', $contenu);
           }
   
           // Mettre à jour le contenu filtré dans le commentaire
           $commentaire->setContenu($contenu);
           $rate = $form->get('rate')->getData();
           $rate = max(1, min(5, $rate));
           $commentaire->setRate($rate);
           // $commentaire->setRate($rate);
            $em->persist($commentaire);
            $em->flush();

            $transport = Transport::fromDsn('smtp://webuild2026@gmail.com:zimfxdkatgdgcoxe@smtp.gmail.com:587');
            $mailer = new Mailer($transport);
            $email = (new Email())
                ->from('webuild2026@gmail.com')
                ->to('jomaamouna@gmail.com')
                ->subject('Someone write a comment')
                ->html('hello check our web application! someone write a comment ');
                $mailer->send($email);
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
            $rate = $form->get('rate')->getData();
            $rate = max(1, min(5, $rate)); // S'assurer que le taux est compris entre 1 et 5
            $commentaire->setRate($rate);
    
            $contenu = $commentaire->getContenu(); // Récupérer le contenu du commentaire

            // Liste de mots inappropriés
            $badWords = ['lol', 'esprit', 'blabla'];
    
            // Remplacer les mots inappropriés par des étoiles dans le contenu
            foreach ($badWords as $badWord) {
                $contenu = preg_replace('/\b' . preg_quote($badWord, '/') . '\b/i', '*****', $contenu);
            }
    
            // Mettre à jour le contenu filtré dans le commentaire
            $commentaire->setContenu($contenu);
    
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
