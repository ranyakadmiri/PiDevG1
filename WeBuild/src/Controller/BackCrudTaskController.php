<?php

namespace App\Controller;

use App\Entity\Task;
use App\Form\Task1Type;
use App\Repository\TaskRepository;
use Doctrine\ORM\EntityManagerInterface;
use MercurySeries\FlashyBundle\FlashyNotifier;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/back/crud/task')]
class BackCrudTaskController extends AbstractController
{
    #[Route('/', name: 'Admin_task_index', methods: ['GET'])]
    public function index(TaskRepository $taskRepository): Response
    {
        return $this->render('back_crud_task/index.html.twig', [
            'tasks' => $taskRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'Admin_New_Task', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager,FlashyNotifier $flashy): Response
    {
        $task = new Task();
        $form = $this->createForm(Task1Type::class, $task);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($task);
            $entityManager->flush();
            $flashy->success('Task Created Successfully!');
            return $this->redirectToRoute('Admin_task_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back_crud_task/new.html.twig', [
            'task' => $task,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'Admin_Task_Show', methods: ['GET'])]
    public function show(Task $task): Response
    {
        return $this->render('back_crud_task/show.html.twig', [
            'task' => $task,
        ]);
    }

    #[Route('/{id}/edit', name: 'Admin_Update_Task', methods: ['GET', 'POST'])]
    public function edit(Request $request, Task $task, EntityManagerInterface $entityManager,FlashyNotifier $flashy): Response
    {
        $form = $this->createForm(Task1Type::class, $task);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $flashy->warning('Task Updated Successfully!');
            return $this->redirectToRoute('Admin_task_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back_crud_task/edit.html.twig', [
            'task' => $task,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'Admin_Delete_Task', methods: ['POST'])]
    public function delete(Request $request, Task $task, EntityManagerInterface $entityManager,FlashyNotifier $flashy): Response
    {
        if ($this->isCsrfTokenValid('delete'.$task->getId(), $request->request->get('_token'))) {
            $entityManager->remove($task);
            $entityManager->flush();
        }
        $flashy->error('Task Deleted Successfully!');
        return $this->redirectToRoute('Admin_task_index', [], Response::HTTP_SEE_OTHER);
    }
}
