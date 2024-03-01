<?php

namespace App\Controller;

use App\Entity\Assurance;
use App\Form\AssuranceType;
use App\Repository\AssuranceRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AssuranceController extends AbstractController
{
    #[Route('/assurance', name: 'app_assurance')]
    public function index(): Response
    {
        return $this->render('assurance/index.html.twig', [
            'controller_name' => 'AssuranceController',
        ]);
    }

    #[Route('/assurance/list', name: 'app_show')]
    public function show(ManagerRegistry $doctrine): Response
    {
        $AssRepo = $doctrine->getRepository(Assurance::class);
        $Assurances = $AssRepo->findAll(Assurance::class);
        return $this->render('assurance/list.html.twig', ['assurances' => $Assurances]);
    }




    #[Route('/assurance/add', name: 'app_add')]
    public function Add(ManagerRegistry $d, Request $request): Response
    {
        $Assurance = new Assurance();
        $em = $d->getManager();
        $form = $this->createForm(AssuranceType::class, $Assurance);
        $form->add('ajouter', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {


            $em->persist($Assurance);
            $em->flush();
            return $this->redirectToRoute('app_show');
        }
        return $this->render('assurance/add.html.twig', ["form" => $form->createView()]);
    }


    #[Route('/deleteAssrance/{id}', name: 'del_ass')]
    public function deletebook($id, ManagerRegistry $doctrine): Response
    {
        $repo = $doctrine->getRepository(Assurance::class);
        $em = $doctrine->getManager();
        $assurance = $repo->find($id);
        $em->remove($assurance);
        $em->flush();
        return $this->redirectToRoute('app_show');
    }

    #[Route('/edit/{id}', name: 'app_Edit')]
    public function edit(AssuranceRepository $repository, $id, Request $request)
    {
        $assurance = $repository->find($id);
        $form = $this->createForm(AssuranceType::class, $assurance);
        $form->add('Edit', SubmitType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("app_show");
        }

        return $this->render('assurance/edit.html.twig', [
            "form" => $form->createView(),
        ]);
    }


    #[Route('/assurance/display', name: 'display')]
    public function display(ManagerRegistry $doctrine): Response
    {
        $AssRepo = $doctrine->getRepository(Assurance::class);
        $Assurances = $AssRepo->findAll(Assurance::class);
        return $this->render('assurance/display.html.twig', ['assurances' => $Assurances]);
    }

    #[Route('/assurance/tri', name: 'tri')]
    public function trierParfranchise()
    {
        $repository = $this->getDoctrine()->getRepository(Assurance::class);

        // Récupérer toutes les assurances triées par prix ascendant
        $assurances = $repository->findBy([], ['franchise' => 'ASC']);

        // Faites quelque chose avec les assurances triées
        // Par exemple, passer les données à une vue pour l'affichage
        return $this->render('assurance/tri.html.twig', [
            'assurances' => $assurances,
        ]);
    }
    #[Route('/assurance/tridesc', name: 'tridesc')]
    public function trierParfranchisedesc()
    {
        $repository = $this->getDoctrine()->getRepository(Assurance::class);

        // Récupérer toutes les assurances triées par prix ascendant
        $assurances = $repository->findBy([], ['franchise' => 'DESC']);

        // Faites quelque chose avec les assurances triées
        // Par exemple, passer les données à une vue pour l'affichage
        return $this->render('assurance/tridesc.html.twig', [
            'assurances' => $assurances,
        ]);
    }
}
