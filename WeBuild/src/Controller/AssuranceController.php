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
}
