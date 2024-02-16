<?php

namespace App\Controller;

use App\Entity\Demande;
use App\Form\DemandeType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DemandeController extends AbstractController
{
    #[Route('/demande', name: 'app_demande')]
    public function index(): Response
    {
        return $this->render('demande/index.html.twig', [
            'controller_name' => 'DemandeController',
        ]);
    }


    #[Route('/demande/list', name: 'list_Demande')]
    public function listbook(ManagerRegistry $doctrine): Response
    {
        $DemRepo = $doctrine->getRepository(Demande::class);
        $demandes = $DemRepo->findAll();
        return $this->render('demande/listdemande.html.twig', ['demandes' => $demandes]);
    }


    #[Route('/demande/add', name: 'addDemande')]
    public function addAuthor(ManagerRegistry $d, Request $request): Response
    {

        $Demande = new Demande();
        $em = $d->getManager();
        $form = $this->createForm(DemandeType::class, $Demande);
        $form->add('ajouter', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $assurance = $Demande->getAssurance();


            $em->persist($Demande);
            $em->persist($assurance);
            $em->flush();
            return $this->redirectToRoute('list_Demande');
        }
        return $this->render('demande/addDemande.html.twig', ['formdemande' => $form->createView()]);
    }
}
