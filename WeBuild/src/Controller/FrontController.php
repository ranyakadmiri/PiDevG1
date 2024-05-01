<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Http\Logout\LogoutHandlerInterface;

class FrontController extends AbstractController
{
    #[Route('/front', name: 'app_front')]
    public function index(UserRepository $userRepository, Security $security,AuthenticationUtils $authenticationUtils): Response
    {
        $lastUsername = $authenticationUtils->getLastUsername();
    // Retrieve the user object
    $user = $userRepository->findOneBy(['email' => $lastUsername]);

    // Check if the user is authenticated
    if (!$user || $user->isVerified()==false) {
        // Handle the case when the user is not authenticated
        // For example, redirect the user to the login page
        return $this->redirectToRoute('app_login'); // Adjust the route name as per your application
    }

    // Check if the user is banned
    if ($user->isIsBanned()) {
        
        // If the user is banned, redirect them to the banned user page
        return $this->redirectToRoute('app_logout');
    }

        return $this->render('front/index.html.twig', [
            'controller_name' => 'FrontController', 
        ]);
    }
}




