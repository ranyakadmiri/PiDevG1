<?php

namespace App\Controller;

use App\Entity\Task;
use App\Form\TaskType;
use App\Repository\TaskRepository;
use Doctrine\ORM\EntityManagerInterface;
use MercurySeries\FlashyBundle\FlashyNotifier;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/Projects/task')]
class TaskCrudController extends AbstractController
{
    #[Route('/', name: 'Task_index', methods: ['GET'])]
    public function index(TaskRepository $taskRepository): Response
    {

        $tasks = $taskRepository->findAll();

        $labels = [];
        $dataYes = 0;
        $dataNo = 0;

        foreach ($tasks as $task) {
            $labels[] = $task->getName();

            // Count the number of tasks with status 'yes' and 'no'
            if ($task->isStatus()) {
                $dataYes++;
            } else {
                $dataNo++;
            }
        }

        $evets = $taskRepository->findAll();

        $rdvs= [];

        foreach ($evets as $event){
            $rdvs[] = [
                'id'=>$event->getId(),
                'title'=>$event->getName(),
                'start'=>$event->getDue()->format('Y-m-d'),
                'end'=>$event->getDue()->format('Y-m-d'),
                'description'=>$event->getDescription(),

                'allDay'=>$event->isStatus(),
            ];
        }

        $data_x = json_encode($rdvs);

        return $this->render('task_crud/index.html.twig', [
            'tasks' => $taskRepository->findAll(),
            'dataYes' => $dataYes, // Pass counters to the Twig template
            'dataNo' => $dataNo,
            'labels' =>  $labels,
            compact('data_x'),
            'data_x' => $data_x

        ]);
    }


    #[Route('/new', name: 'Task_add', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager,FlashyNotifier $flashy): Response
    {
        $task = new Task();
        $form = $this->createForm(TaskType::class, $task);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($task);
            $user=$this->getUser();
            $task-> setUser($user);
            $entityManager->flush();
            $flashy->success('Task Created Successfully!');
            return $this->redirectToRoute('Task_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('task_crud/new.html.twig', [
            'task' => $task,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'Task_Show', methods: ['GET'])]
    public function show(Task $task): Response
    {
        return $this->render('task_crud/show.html.twig', [
            'task' => $task,
        ]);
    }

    #[Route('/{id}/edit', name: 'Task_Update', methods: ['GET', 'POST'])]
    public function edit(Request $request, Task $task, EntityManagerInterface $entityManager ,FlashyNotifier $flashy): Response
    {
        $form = $this->createForm(TaskType::class, $task);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $flashy->warning('Task Updated Successfully!');
            return $this->redirectToRoute('Task_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('task_crud/edit.html.twig', [
            'task' => $task,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'Task_Delete', methods: ['POST'])]
    public function delete(Request $request, Task $task, EntityManagerInterface $entityManager ,FlashyNotifier $flashy): Response
    {
        if ($this->isCsrfTokenValid('delete'.$task->getId(), $request->request->get('_token'))) {
            $entityManager->remove($task);
            $entityManager->flush();
        }
        $flashy->error('Task Deleted Successfully!');
        return $this->redirectToRoute('Task_index', [], Response::HTTP_SEE_OTHER);
    }
}
