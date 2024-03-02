<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EmailsentController extends AbstractController
{
    #[Route('/emailsent', name: 'app_emailsent')]
    public function index(): Response
    {
        return $this->render('emailsent/index.html.twig', [
            'controller_name' => 'EmailsentController',  
        ]);
    }
}
