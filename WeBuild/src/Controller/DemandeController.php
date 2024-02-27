<?php

namespace App\Controller;

use App\Entity\Demande;
use App\Form\DemandeType;
use App\Repository\AssuranceRepository;
use App\Repository\DemandeRepository;
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
    public function listDemande(ManagerRegistry $doctrine): Response
    {
        $DemRepo = $doctrine->getRepository(Demande::class);
        $demandes = $DemRepo->findAll();
        return $this->render('demande/listdemande.html.twig', ['demandes' => $demandes]);
    }


    #[Route('/demande/add', name: 'addDemande')]
    public function addDemande(ManagerRegistry $d, Request $request): Response
    {

        $Demande = new Demande();
        $em = $d->getManager();
        $form = $this->createForm(DemandeType::class, $Demande);

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
    #[Route('/demandes/edit/{id}', name: 'edit_Demande')]

    public function editDemande(DemandeRepository $repository, $id, Request $request)
    {
        $assurance = $repository->find($id);
        $form = $this->createForm(DemandeType::class, $assurance);
        $form->add('Edit', SubmitType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("list_Demande");
        }

        return $this->render('demande/edit.html.twig', [
            "formdemande" => $form->createView(),
        ]);
    }










    #[Route('/deletedemande/{id}', name: 'del_Demande')]
    public function deleteDemande($id, ManagerRegistry $doctrine): Response
    {
        $repo = $doctrine->getRepository(Demande::class);
        $em = $doctrine->getManager();
        $demande = $repo->find($id);
        $em->remove($demande);
        $em->flush();
        return $this->redirectToRoute('list_Demande');
    }


    #[Route('/depodem/{id}', name: 'depodem')]
    public function depodem($id, AssuranceRepository $repository, ManagerRegistry $d, Request $request): Response
    {

        $Demande = new Demande();
        $assurance = $repository->find($id);
        $Demande->setAssurance($assurance);
        $em = $d->getManager();
        $form = $this->createForm(DemandeType::class,  $Demande);


        $form->handleRequest($request);
        if ($form->isSubmitted()) {



            $em->persist($Demande);
            $em->persist($assurance);
            $em->flush();
            return $this->redirectToRoute('displaydem');
        }
        return $this->render('demande/depodem.html.twig', ['formdemande' => $form->createView()]);
    }
    #[Route('/displaydem', name: 'displaydem')]
    public function displaydem(ManagerRegistry $doctrine): Response
    {
        $DemRepo = $doctrine->getRepository(Demande::class);
        $demandes = $DemRepo->findAll();
        return $this->render('demande/displaydem.html.twig', ['demandes' => $demandes]);
    }
}
