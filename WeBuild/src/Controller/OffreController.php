<?php

namespace App\Controller;

use App\Entity\Offre;
use App\Form\OffreType;
use App\Repository\OffreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

class OffreController extends AbstractController
{
    #[Route('/offre', name: 'app_offre')]
    public function index(): Response
    {
        return $this->render('offre/Add.html.twig', [
            'controller_name' => 'OffreController',
        ]);
    }
    #[Route('/offre/list', name: 'app_show')]
    public function show(ManagerRegistry $doctrine): Response
    {
        $OffRepo = $doctrine->getRepository(Offre::class);
        $Offres = $OffRepo->findAll(Offre::class);
        return $this->render('offre/list.html.twig', ['offres' => $Offres]);
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
            throw $this->createNotFoundException('Auteur non trouvé');
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($offre);
        $em->flush();

        
        return $this->redirectToRoute('app_show');
    }
}
