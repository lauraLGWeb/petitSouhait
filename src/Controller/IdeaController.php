<?php

namespace App\Controller;

use App\Entity\Gift;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;


final class IdeaController extends AbstractController
{
    #[Route('/membre/nosidees', name: 'app_idee')]
    #[IsGranted('ROLE_MEMBRE')]
    public function index(EntityManagerInterface $em, Request $request): Response
    {

         //get all the users
        $Users = $em->getRepository(User::class)->findAll();
 $selectedUserId = $request->query->get('membre');
    $selectedUser = null;
    $ideas = [];

    if ($selectedUserId) {
        $selectedUser = $em->getRepository(User::class)->find($selectedUserId);
        
        if ($selectedUser) {
            $ideas = $em->getRepository(Gift::class)->findByUser($selectedUser);
        }
    }

    return $this->render('idea/index.html.twig', [
        'ideas'        => $ideas,
        'Users'        => $Users,
        'selectedUser' => $selectedUser,
    ]);
    }
}
