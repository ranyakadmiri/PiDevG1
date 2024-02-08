<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MaterielController extends AbstractController
{
    #[Route('/materiel', name: 'app_materiel')]
    public function index(): Response
    {
        return $this->render('materiel/index.html.twig', [
            'controller_name' => 'MaterielController',
        ]);
    }
    #[Route('/ajoutermateriel', name: 'app_ajoutermateriel')]
    public function ajoutermateriel(): Response
    {
        return $this->render('materiel/ajoutermateriel.html.twig', [
            'controller_name' => 'MaterielController',
        ]);
    }
    #[Route('/modifiermateriel', name: 'app_modifiermateriel')]
    public function modifiermateriel(): Response
    {
        return $this->render('materiel/modifiermateriel.html.twig', [
            'controller_name' => 'MaterielController',
        ]);
    }
}
