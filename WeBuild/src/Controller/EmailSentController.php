<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EmailSentController extends AbstractController
{
    #[Route('/email/sent', name: 'app_email_sent')]
    public function index(): Response
    {
        return $this->render('email_sent/index.html.twig', [
            'controller_name' => 'EmailSentController',
        ]);
    }
}
