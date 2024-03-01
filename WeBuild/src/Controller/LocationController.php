<?php

namespace App\Controller;

use App\Repository\PackMaterielRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\Location;
use App\Entity\PackMateriel;
use App\Form\LocationType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LocationController extends AbstractController
{
    #[Route('/location', name: 'app_location')]
    public function index() {
        
        $PackMateriel = $this->getDoctrine()->getRepository(PackMateriel::class)->findAll();
    
        return $this->render('location/index.html.twig', [
            'PackMateriel' => $PackMateriel,
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
            $dateD = $form->get('dateD')->getData();
            $dateF = $form->get('dateF')->getData();

            if ($dateF < $dateD) {
                $form->addError(new FormError('La date de fin doit être supérieure à la date de début.'));
                return $this->render('location/louer.html.twig', ['form' => $form->createView(), 'packMateriel' => $PackMateriel]);
            }
            $location->setPackMateriel($PackMateriel);

            $em = $doctrine->getManager();
            $em->persist($location);
            $em->flush();

            return $this->redirectToRoute('checkout');
        }

        return $this->render('location/louer.html.twig', ['form' => $form->createView(), 'packMateriel' => $PackMateriel]);
    }

    #[Route('/locations', name: 'locations')]
    public function affichagelocations(): Response
    {

        $Locations = $this->getDoctrine()->getManager()->getRepository(Location::class)->findAll();
        
        return $this->render('materiel/location.html.twig', ['ll'=>$Locations]);
    }

    #[Route('/searchPack', name: 'searchPack')]
public function searchPack(Request $request, PackMaterielRepository $PackMaterielRepository): Response
{
    $keyword = $request->query->get('keyword');

    // Requête pour rechercher les posts contenant exactement le mot-clé dans le titre
    $PackMateriel = $PackMaterielRepository->createQueryBuilder('p')
        ->andWhere('p.libelle LIKE :keyword')
        ->orWhere('p.description LIKE :keyword')
        ->orWhere('p.prix LIKE :keyword')
        ->setParameter('keyword', '%'.$keyword.'%')
        ->orderBy('p.libelle', 'ASC')
        ->getQuery()
        ->getResult();
        

    return $this->render('location/index.html.twig', [
        'PackMateriel' => $PackMateriel,
    ]);
}
}