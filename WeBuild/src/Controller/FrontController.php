<?php

namespace App\Controller;

use App\Repository\TaskRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    #[Route('/front', name: 'app_front')]
    public function index(): Response
    {



        return $this->render('front/index.html.twig', [
            'controller_name' => 'FrontController'
        ]);
    }
    #[Route('/calender', name: 'app_calender')]
    public function calender(TaskRepository $taskRepositor): Response
    {
        $evets = $taskRepositor->findAll();

        $rdvs= [];

        foreach ($evets as $event){
            $rdvs[] = [
                'id'=>$event->getId(),
                'title'=>$event->getName(),
                'start'=>$event->getDue()->format('Y-m-d'),
                'end'=>$event->getDue()->format('Y-m-d'),
                'description'=>$event->getDescription(),
                'backgroundColor'=>"#ff0000",
                'borderColor'=>"#ffff00",
                'allDay'=>$event->isStatus(),
            ];
        }

        $data = json_encode($rdvs);
        return $this->render('base.html.twig', [
            'controller_name' => 'FrontController', compact('data')
        ]);
    }

}
