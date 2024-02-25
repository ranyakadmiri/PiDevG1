<?php

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
    #[Route('/post', name: 'app_post')]
    public function index(): Response
    {
        return $this->render('post/index.html.twig', [
            'controller_name' => 'PostController',
        ]);
    }

    #[Route('/showPost/{id}', name: 'detailPost')]
public function detail(ManagerRegistry $doctrine,$id): Response
{
    // Récupérer le post spécifique par son ID
    $repo=$doctrine->getRepository(Post::class);
    $post = $repo->find($id);
    if (!$post) {
        $this -> addFlash('error' ,"l'id $id de ce post n'existe pas");
        return $this->redirectToRoute('showPost');
     }
    $commentaires = $post->getCommentaires();
    // Vérifier si le post existe
 
    return $this->render('post/detailPost.html.twig',
    ['post'=>$post,'commentaires' => $commentaires]);
    }
    
    #[Route('/showPost', name: 'showPost')]
    public function showPost(PostRepository $repo): Response
    {
        $post=$repo->findAll();
      
        return $this->render('post/showPost.html.twig',[
            'post'=>$post,
          
        ]); 
    }
  /*  #[Route('/showPost/{id}', name: 'showPostById')]
  /*  public function showpostid(EntityManagerInterface $entityManager, int $id): Response
    {
        $post = $entityManager->getRepository(post::class)->find($id);

        if (!$post) {
            throw $this->createNotFoundException(
                'No post found for id '.$id
            );
        }

        return new Response('Check out this great post: '.$post->getId());

        // or render a template
        // in the template, print things with {{ product.name }}
         return $this->render('post/showPost.html.twig', ['post' => $post]);
    }*/
   /* #[Route('/showPost', name: 'showPost')]
public function showPost(int $postId, PostRepository $postRepo, CommentaireRepository $commentaireRepo, Request $request, EntityManagerInterface $entityManager): Response
{
    // Récupérer le post spécifique par son ID
    $post = $postRepo->find($postId);

    // Vérifier si le post existe
    if (!$post) {
        throw $this->createNotFoundException('Le post avec l\'ID '.$postId.' n\'existe pas.');
    }

    // Récupérer tous les commentaires liés à ce post
    $commentaires = $commentaireRepo->findBy(['Post' => $post]);

    // Créer une nouvelle instance de Commentaire
    $commentaire = new Commentaire();
    $commentaire->setPost($post); // Associer le commentaire au post récupéré

    // Créer un formulaire pour ajouter un commentaire
    $form = $this->createForm(FormCommentaireType::class, $commentaire);
    $form->handleRequest($request);

    // Vérifier si le formulaire est soumis et valide
    if ($form->isSubmitted() && $form->isValid()) {
        // Enregistrer le commentaire dans la base de données
        $entityManager->persist($commentaire);
        $entityManager->flush();

        // Rediriger vers la page de détail du post
        return $this->redirectToRoute('showPost', ['postId' => $postId]);
    }

    return $this->render('post/showPost.html.twig', [
        'post' => $post,
        'commentaires' => $commentaires,
        'form' => $form->createView(),
    ]);
}*/
/*                 */
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

        return $this->render('post/addPost.html.twig', [
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
    public function deletePost($id, Request $request, PostRepository $repo, EntityManagerInterface $em): Response
    {
        $post = $repo->find($id);
    
    if (!$post) {
        // Handle the case where Post is not found
        // You can throw an exception, return a response, etc.
    }

    // Retrieve all comments associated with the post
    $comments = $post->getCommentaires();

    // Remove each comment from the post
    foreach ($comments as $comment) {
        $post->removeCommentaire($comment);
        $em->remove($comment);
    }

    // Now remove the post itself
    $em->remove($post);

    $em->flush();
        return $this->redirectToRoute('showPost');


    }
    #[Route('/showPostBack', name: 'showPostBack')]
    public function showPostBack(PostRepository $repo): Response
    {
        $post=$repo->findAll();
        return $this->render('back/showPostBack.html.twig',[
            'post'=>$post,
        ]); 
    }
  /*1
   #[Route('/searchPost', name: 'searchPost')]
    public function searchPost(Request $request, PostRepository $postRepository): Response
    {
        $keyword = $request->query->get('keyword');

        // Utilisez la méthode findBy du repository pour rechercher les posts par titre
        $post = $postRepository->findBy(['titre' => $keyword]);

        return $this->render('post/showPost.html.twig', [
            'post' => $post,
            
        ]);
    }*/
    #[Route('/searchPost', name: 'searchPost')]
public function searchPost(Request $request, PostRepository $postRepository): Response
{
    $keyword = $request->query->get('keyword');

    // Requête pour rechercher les posts contenant exactement le mot-clé dans le titre
    $post = $postRepository->createQueryBuilder('p')
        ->andWhere('p.titre LIKE :keyword')
        ->setParameter('keyword', '%'.$keyword.'%')
        ->orderBy('p.date', 'DESC')
        ->getQuery()
        ->getResult();
        

    return $this->render('post/showPost.html.twig', [
        'post' => $post,
    ]);
}

    
    #[Route('/updatetPostBack{id}', name: 'updatePostBack')]
    public function editPostBack($id,PostRepository $repo, EntityManagerInterface $em,HttpFoundationRequest $request)
    {
        $post =$repo->find($id);
        $form = $this->createForm(PostType::class, $post);
        $form->add('Update',SubmitType::class);

        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($post);
            $em->flush();
            return $this->redirectToRoute('showPostBack');
        }

        return $this->render('back/addPostBack.html.twig', [
            'f' => $form->createView()
        ]);
    }

    #[Route('/deletePostback/{id}', name: 'deletePostback')]
    public function deletePostback($id, Request $request, PostRepository $repo, EntityManagerInterface $em): Response
    {
        $post = $repo->find($id);
    
    if (!$post) {
        // Handle the case where Post is not found
        // You can throw an exception, return a response, etc.
    }

    // Retrieve all comments associated with the post
    $comments = $post->getCommentaires();

    // Remove each comment from the post
    foreach ($comments as $comment) {
        $post->removeCommentaire($comment);
        $em->remove($comment);
    }

    // Now remove the post itself
    $em->remove($post);

    $em->flush();
        return $this->redirectToRoute('showPostBack');


    }
    #[Route('/showPostBack/{id}', name: 'detailPostBack')]
    public function detailPostBack(ManagerRegistry $doctrine,$id): Response
    {
        // Récupérer le post spécifique par son ID
        $repo=$doctrine->getRepository(Post::class);
        $post = $repo->find($id);
        if (!$post) {
            $this -> addFlash('error' ,"l'id $id de ce post n'existe pas");
            return $this->redirectToRoute('showPostBack');
         }
        $commentaires = $post->getCommentaires();
        // Vérifier si le post existe
     
        return $this->render('back/showComBack.html.twig',
        ['post'=>$post,'commentaires' => $commentaires]);
        }

/*#[Route('/showPostBack/{postId}', name: 'showPostBack')]
public function showPostBack(int $postId, PostRepository $postRepo, CommentaireRepository $commentaireRepo, Request $request, EntityManagerInterface $entityManager): Response
{
    // Récupérer le post spécifique par son ID
    $post = $postRepo->find($postId);

    // Vérifier si le post existe
    if (!$post) {
        throw $this->createNotFoundException('Le post avec l\'ID '.$postId.' n\'existe pas.');
    }

    // Récupérer tous les commentaires liés à ce post
    $commentaires = $commentaireRepo->findBy(['Post' => $post]);

    // Créer une nouvelle instance de Commentaire
    $commentaire = new Commentaire();
    $commentaire->setPost($post); // Associer le commentaire au post récupéré

    // Créer un formulaire pour ajouter un commentaire
    $form = $this->createForm(FormCommentaireType::class, $commentaire);
    $form->handleRequest($request);

    // Vérifier si le formulaire est soumis et valide
    if ($form->isSubmitted() && $form->isValid()) {
        // Enregistrer le commentaire dans la base de données
        $entityManager->persist($commentaire);
        $entityManager->flush();

        // Rediriger vers la page de détail du post
        return $this->redirectToRoute('showPostBack', ['postId' => $postId]);
    }

    return $this->render('post/showPostBack.html.twig', [
        'post' => $post,
        'commentaires' => $commentaires,
        'form' => $form->createView(),
    ]);
}*/



    
    

    #[Route('/addPostBack', name: 'addPostBack')]
    public function addPostBack(PostRepository $repo, EntityManagerInterface $em,HttpFoundationRequest $request)
    {
        $post = new Post();
        $form = $this->createForm(PostType::class, $post);
        $form->add('add',SubmitType::class);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($post);
            $em->flush();
            return $this->redirectToRoute('showPostBack');  
        }

        return $this->render('back/addPostBack.html.twig', [
            'f' => $form->createView()
        ]);
    }


}
