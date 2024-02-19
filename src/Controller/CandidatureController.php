<?php

namespace App\Controller;

use App\Entity\Candidature;
use App\Form\CandidatureType;
use App\Repository\CandidatureRepository;
use App\Repository\CandidatureRepositoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

class CandidatureController extends AbstractController
{
    #[Route('/candidature', name: 'app_candidature')]
    public function index(): Response
    {
        return $this->render('candidature/index.html.twig', [
            'controller_name' => 'CandidatureController',
        ]);
    }
    //-------------------FRONT---------------------------------
    #[Route('/Candidature/list', name: 'app_showCan')]
    public function show(ManagerRegistry $doctrine): Response
    {
        $CanRepo = $doctrine->getRepository(Candidature::class);
        $Candidatures = $CanRepo->findAll(Candidature::class);
        return $this->render('candidature/list.html.twig', ['candidatures' => $Candidatures]);
    }
    #[Route('/AddCandidature', name: 'app_AddCan')]

    public function  Add (Request  $request)
    {
        $Candidature=new Candidature();
        $form =$this->CreateForm(CandidatureType::class,$Candidature);
       
      $form->add('Ajouter',SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
             
             $selectedOffre = $form->get('offre')->getData();
             $Candidature->setOffre($selectedOffre);
            $em=$this->getDoctrine()->getManager();
            $em->persist($Candidature);
            $em->flush();
            return $this->redirectToRoute('app_showCan');
        }
        return $this->render('candidature/Add.html.twig',['f'=>$form->createView()]);
    }

    #[Route('/editCan/{id}', name: 'app_EditCan')]
    public function edit(CandidatureRepository $repository, $id, Request $request)
    {
        $Candidature = $repository->find($id);
        $form = $this->createForm(CandidatureType::class, $Candidature);
        $form->add('Edit', SubmitType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush(); // Correction : Utilisez la méthode flush() sur l'EntityManager pour enregistrer les modifications en base de données.
            return $this->redirectToRoute("app_showCan");
        }

        return $this->render('candidature/edit.html.twig', [
            'f' => $form->createView(),
        ]);
    }
    #[Route('/delete/candidature/{id}', name: 'app_deleteCan')]
    public function delete($id, CandidatureRepository $repository)
    {
        $Candidature= $repository->find($id);

        if (!$Candidature) {
            throw $this->createNotFoundException('Candidature non trouvé');
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($Candidature);
        $em->flush();

        
        return $this->redirectToRoute('app_showCan');
    }

    //-------------------------BACK----------------------------------------
    #[Route('/Candidature/listBack', name: 'app_showCanBack')]
    public function showBack(ManagerRegistry $doctrine): Response
    {
        $CanRepo = $doctrine->getRepository(Candidature::class);
        $Candidatures = $CanRepo->findAll(Candidature::class);
        return $this->render('back/listCan.html.twig', ['candidatures' => $Candidatures]);
    }
    #[Route('/AddCandidatureBack', name: 'app_AddCanBack')]

    public function  AddBack (Request  $request)
    {
        $Candidature=new Candidature();
        $form =$this->CreateForm(CandidatureType::class,$Candidature);
       
      $form->add('Ajouter',SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
             
             $selectedOffre = $form->get('offre')->getData();
             $Candidature->setOffre($selectedOffre);
            $em=$this->getDoctrine()->getManager();
            $em->persist($Candidature);
            $em->flush();
            return $this->redirectToRoute('app_showCanBack');
        }
        return $this->render('back/addCan.html.twig',['f'=>$form->createView()]);
    }

    #[Route('back/editCan/{id}', name: 'app_EditCanBack')]
    public function editBack(CandidatureRepository $repository, $id, Request $request)
    {
        $Candidature = $repository->find($id);
        $form = $this->createForm(CandidatureType::class, $Candidature);
        $form->add('Edit', SubmitType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush(); // Correction : Utilisez la méthode flush() sur l'EntityManager pour enregistrer les modifications en base de données.
            return $this->redirectToRoute("app_showCanBack");
        }

        return $this->render('back/editCan.html.twig', [
            'f' => $form->createView(),
        ]);
    }
    #[Route('/delete/candidature/{id}', name: 'app_deleteCanBack')]
    public function deleteBack($id, CandidatureRepository $repository)
    {
        $Candidature= $repository->find($id);

        if (!$Candidature) {
            throw $this->createNotFoundException('Candidature non trouvé');
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($Candidature);
        $em->flush();

        
        return $this->redirectToRoute('app_showCanBack');
    }
}
