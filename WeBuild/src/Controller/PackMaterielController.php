<?php

namespace App\Controller;

use App\Entity\PackMateriel;
use App\Form\PackMaterielType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PackMaterielController extends AbstractController
{
    #[Route('/materiel', name: 'app_materiel')]
    public function index(): Response
    {
        return $this->render('materiel/index.html.twig', [
            'controller_name' => 'MaterielController',
        ]);
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
        return $this->redirectToRoute('materiel/ajouterMateriel.html.twig',['f'=>$form->createView()]);

    }
    
}
