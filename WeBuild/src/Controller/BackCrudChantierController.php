<?php

namespace App\Controller;

use App\Entity\Chantier;
use App\Form\Chantier1Type;
use App\Repository\ChantierRepository;
use Doctrine\ORM\EntityManagerInterface;
use MercurySeries\FlashyBundle\FlashyNotifier;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/back/crud/chantier')]
class BackCrudChantierController extends AbstractController
{
    #[Route('/', name: 'admin_project_index', methods: ['GET'])]
    public function index(ChantierRepository $chantierRepository,FlashyNotifier $flashy): Response
    {
        $flashy->info('Wellcome ! ;) ');
        return $this->render('back_crud_chantier/index.html.twig', [
            'chantiers' => $chantierRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'admin_new_chantier', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager,FlashyNotifier $flashy): Response
    {
        $chantier = new Chantier();
        $form = $this->createForm(Chantier1Type::class, $chantier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($chantier);
            $entityManager->flush();
            $flashy->success('Chantier Created Successfully!');
            return $this->redirectToRoute('admin_project_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back_crud_chantier/new.html.twig', [
            'chantier' => $chantier,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'Admin_Show_Chantier', methods: ['GET'])]
    public function show(Chantier $chantier): Response
    {
        return $this->render('back_crud_chantier/show.html.twig', [
            'chantier' => $chantier,
        ]);
    }

    #[Route('/{id}/edit', name: 'Admin_Update_Chantier', methods: ['GET', 'POST'])]
    public function edit(Request $request, Chantier $chantier, EntityManagerInterface $entityManager,FlashyNotifier $flashy): Response
    {
        $form = $this->createForm(Chantier1Type::class, $chantier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $flashy->warning('Chantier Updated Successfully!');
            return $this->redirectToRoute('admin_project_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back_crud_chantier/edit.html.twig', [
            'chantier' => $chantier,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'Admin_Delete_Chantier', methods: ['POST'])]
    public function delete(Request $request, Chantier $chantier, EntityManagerInterface $entityManager,FlashyNotifier $flashy): Response
    {
        if ($this->isCsrfTokenValid('delete'.$chantier->getId(), $request->request->get('_token'))) {
            $entityManager->remove($chantier);
            $entityManager->flush();
        }
        $flashy->error('Chantier Deleted Successfully!');
        return $this->redirectToRoute('admin_project_index', [], Response::HTTP_SEE_OTHER);
    }
}
