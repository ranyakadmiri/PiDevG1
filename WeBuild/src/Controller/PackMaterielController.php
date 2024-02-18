<?php

namespace App\Controller;

use App\Entity\PackMateriel;
use App\Form\PackMaterielType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PackMaterielController extends AbstractController
{
    #[Route('/materiel', name: 'app_materiel')]
    public function index(): Response
    {

        $PackMateriels = $this->getDoctrine()->getManager()->getRepository(PackMateriel::class)->findAll();
        
        return $this->render('materiel/index.html.twig', ['pm'=>$PackMateriels]);
    }

    #[Route('/ajoutermateriel', name: 'ajouterMateriel')]
    public function ajouterMateriel(Request $request): Response
    {
        $PackMateriel = new PackMateriel();

        $form = $this->createForm(PackMaterielType::class,$PackMateriel);

        $form->handleRequest($request);
        

        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($PackMateriel);
            $em->flush();

            return $this->redirectToRoute('app_materiel');

        }
        return $this->render('materiel/ajouterMateriel.html.twig',['f'=>$form->createView()]);

    }

    #[Route('/suprimermateriel/{id}', name: 'supprimermateriel')]
    public function delesupprimerMaterieltebook($id, ManagerRegistry $doctrine): Response
    {
        $repo = $doctrine->getRepository(PackMateriel::class);
        $em = $doctrine->getManager();
        $PackMateriel = $repo->find($id);
        $em->remove($PackMateriel);
        $em->flush();
        return $this->redirectToRoute('app_materiel');
    }

    #[Route('/modifiermateriel/{id}', name: 'modifierMateriel')]
    public function modifierMateriel(Request $request,$id): Response
    {
        $PackMateriel = $this->getDoctrine()->getManager()->getRepository(PackMateriel::class)->find($id);

        $form = $this->createForm(PackMaterielType::class,$PackMateriel);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirectToRoute('app_materiel');

        }
        return $this->render('materiel/modifierMateriel.html.twig',['f'=>$form->createView()]);

    }

}
