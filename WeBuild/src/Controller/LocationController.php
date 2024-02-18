<?php

namespace App\Controller;

use App\Entity\Location;
use App\Entity\PackMateriel;
use App\Form\LocationType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LocationController extends AbstractController
{
    #[Route('/location', name: 'app_location')]
    public function index() {
        $PackMateriels = $this->getDoctrine()->getRepository(PackMateriel::class)->findAll();
    
        return $this->render('location/index.html.twig', [
            'PackMateriels' => $PackMateriels,
        ]);
    }

    #[Route('/louer/{id}', name: 'louer_materiel')]
    public function louer(Request $request, $id,ManagerRegistry $doctrine ): Response
    {
        $location = new Location();
        $PackMateriel = $doctrine->getRepository(PackMateriel::class)->find($id);

        $form = $this->createForm(LocationType::class, $location);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $location->setPackMateriel($PackMateriel);

            $em = $doctrine->getManager();
            $em->persist($location);
            $em->flush();

            return $this->redirectToRoute('app_location');
        }

        return $this->render('location/louer.html.twig', ['form' => $form->createView(), 'packMateriel' => $PackMateriel]);
    }

    #[Route('/locations', name: 'locations')]
    public function affichagelocations(): Response
    {

        $Locations = $this->getDoctrine()->getManager()->getRepository(Location::class)->findAll();
        
        return $this->render('materiel/location.html.twig', ['ll'=>$Locations]);
    }
}