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
use App\Form\IdeaType;


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

 // route for adding an idea for me 
     #[Route('/membre/menu/ajouterIdée', name: 'app_addGiftIdea')]
     #[IsGranted('ROLE_MEMBRE')]
    public function add( Request $request, EntityManagerInterface $em): Response
    {

        //get the user connected
        $actualUser = $this->getUser();

           $idea = new Gift();

         //create the form
        $form = $this->createForm(IdeaType::class, $idea);
        $form->handleRequest($request);
        $idea->setUser($actualUser);

        
         if ($form->isSubmitted() && $form->isValid()) {

            $em->persist($idea);
            $em->flush();        

        $this->addFlash('success', 'Super, idée ajoutée avec succès !');          
            return $this->redirectToRoute('app_idee');
        } 


        if($form->isSubmitted()&& !$form->isValid())
        {   
         $this->addFlash('error', 'Erreur dans la mise à jour, celle ci n\'est pas prise en compte');
        }

         return $this->render("home/ajouter.html.twig", ["form" => $form]);
     }









}
