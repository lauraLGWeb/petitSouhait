<?php

namespace App\Controller;

use App\Entity\Gift;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;


final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_menu')]
    public function menu(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


   

     #[Route('/membre/famille', name: 'app_family')]
     #[IsGranted('ROLE_MEMBRE')]
    public function family(): Response
    {
        return $this->render('home/famille.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

     
}
