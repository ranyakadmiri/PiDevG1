<?php

namespace App\Controller;

use App\Entity\Offre;
use App\Form\OffreType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\OffreRepository;

class OffreController extends AbstractController
{
    #[Route('/offre', name: 'app_offre')]
    public function index(): Response
    {
        return $this->render('offre/Add.html.twig', [
            'controller_name' => 'OffreController',
        ]);
    }
    //-------------------------------FRONT---------------------------------------
    #[Route('/offre/list', name: 'app_show')]
    public function show(Request $request, OffreRepository $offreRepository,ManagerRegistry $doctrine): Response
    { /*  $OffRepo = $doctrine->getRepository(Offre::class);
        $Offres = $OffRepo->findAll(Offre::class);
        return $this->render('offre/list.html.twig', ['offres' => $Offres]);*/

        $minSalary = $request->query->get('min_salary');
        $maxSalary = $request->query->get('max_salary');
    
        // Retrieve offers filtered by salary range
        $offres = $offreRepository->findBySalaryRange($minSalary, $maxSalary);
    
        //search
        $searchQuery = $request->query->get('search');

        if ($searchQuery) {
            $offres = $doctrine->getRepository(Offre::class)->findByTitle($searchQuery);
        } else {
            $offres = $doctrine->getRepository(Offre::class)->findAll();
        }

        return $this->render('offre/list.html.twig', [
            'offres' => $offres,
        ]);

    }
    #[Route('/AddOffre', name: 'app_AddOffre')]

    public function  Add (Request  $request)
    {
        $offre=new Offre();
        $form =$this->CreateForm(OffreType::class,$offre);
      $form->add('Ajouter',SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($offre);
            $em->flush();
            return $this->redirectToRoute('app_show');
        }
        return $this->render('offre/Add.html.twig',['form'=>$form->createView()]);
    }

    #[Route('/edit/{id}', name: 'app_EditOffre')]
    public function edit(OffreRepository$repository, $id, Request $request)
    {
        $offre = $repository->find($id);
        $form = $this->createForm(OffreType::class, $offre);
        $form->add('Edit', SubmitType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush(); // Correction : Utilisez la méthode flush() sur l'EntityManager pour enregistrer les modifications en base de données.
            return $this->redirectToRoute("app_show");
        }

        return $this->render('offre/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    #[Route('/delete/{id}', name: 'app_deleteOffre')]
    public function delete($id, OffreRepository $repository)
    {
        $offre= $repository->find($id);

        if (!$offre) {
            throw $this->createNotFoundException('offre non trouvé');
        }
        $em = $this->getDoctrine()->getManager();
        $candidatures = $offre->getCandidatures();
        foreach ($candidatures as $candidature) {
            $offre->removeCandidature($candidature);
            $em->remove($candidature);
        }
       
        $em->remove($offre);
        $em->flush();

        
        return $this->redirectToRoute('app_show');
    }

    //------------------------BACK---------------------------------------------------

    #[Route('/offre/listBack', name: 'app_showOffreBack')]
    public function showBack(ManagerRegistry $doctrine): Response
    {
        $OffRepo = $doctrine->getRepository(Offre::class);
        $Offres = $OffRepo->findAll(Offre::class);
        return $this->render('back/listOffre.html.twig', ['offres' => $Offres]);
    }
    #[Route('/AddOffreBack', name: 'app_AddOffreBack')]

    public function  AddBack (Request  $request)
    {
        $offre=new Offre();
        $form =$this->CreateForm(OffreType::class,$offre);
      $form->add('Ajouter',SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($offre);
            $em->flush();
            return $this->redirectToRoute('app_showOffreBack');
        }
        return $this->render('back/addOffre.html.twig',['form'=>$form->createView()]);
    }

    #[Route('/back/edit/{id}', name: 'app_EditOffreBack')]
    public function editBack(OffreRepository$repository, $id, Request $request)
    {
        $offre = $repository->find($id);
        $form = $this->createForm(OffreType::class, $offre);
        $form->add('Edit', SubmitType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush(); // Correction : Utilisez la méthode flush() sur l'EntityManager pour enregistrer les modifications en base de données.
            return $this->redirectToRoute("app_showOffreBack");
        }

        return $this->render('back/editOffre.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    #[Route('/back/delete/{id}', name: 'app_deleteOffreBack')]
    public function deleteBack($id, OffreRepository $repository)
    {
        $offre= $repository->find($id);

        if (!$offre) {
            throw $this->createNotFoundException('offre non trouvé');
        }
        $em = $this->getDoctrine()->getManager();
        $candidatures = $offre->getCandidatures();
        foreach ($candidatures as $candidature) {
            $offre->removeCandidature($candidature);
            $em->remove($candidature);
        }
       
        $em->remove($offre);
        $em->flush();

        return $this->redirectToRoute("app_showOffreBack");
    }

    //showing per map
    #[Route('/offers/map', name: 'show_map')]
    public function showOffersMap(): Response
    {
        // Retrieve offer data from the database, including latitude and longitude
        $offres = $this->getDoctrine()->getRepository(Offre::class)->findAll();

        return $this->render('offre/map.html.twig', [
            'offres' => $offres,
        ]);
    }

   
    
}
