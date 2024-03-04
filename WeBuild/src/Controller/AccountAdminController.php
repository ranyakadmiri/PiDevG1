<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[IsGranted('ROLE_ADMIN')]
class AccountAdminController extends AbstractController
{
    #[Route('/account/admin', name: 'app_account_admin')]
    public function index(): Response
    {
        return $this->render('account_admin/index.html.twig', [
            'controller_name' => 'AccountAdminController',
        ]);
    }
}
