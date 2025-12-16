<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/menu', name: 'app_menu')]
    public function menu(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

     #[Route('/menu/ajouter', name: 'app_add')]
    public function add(): Response
    {
        return $this->render('home/ajouter.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


     #[Route('/famille', name: 'app_family')]
    public function family(): Response
    {
        return $this->render('home/famille.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

      #[Route('/nosidees', name: 'app_idee')]
    public function idee(): Response
    {
        return $this->render('home/idea.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
