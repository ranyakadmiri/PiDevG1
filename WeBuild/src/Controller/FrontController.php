<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class FrontController extends AbstractController
{
    #[Route('/front', name: 'app_front')]
    public function index(): Response
    {
    // Retrieve the user object
    $user = $this->getUser();

    // Check if the user is authenticated
    if (!$user) {
        // Handle the case when the user is not authenticated
        // For example, redirect the user to the login page
        return $this->redirectToRoute('app_login'); // Adjust the route name as per your application
    }
        return $this->render('front/index.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }
}




