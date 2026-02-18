<?php

namespace App\Controller;

use App\Entity\Gift;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
USE App\Entity\User;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;


final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_menu')]
    public function menu(): Response
    {
        return $this->render('home/index.html.twig');
    }

   
     
}
