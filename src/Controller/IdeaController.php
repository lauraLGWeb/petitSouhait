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

 // adding an idea for me 
     #[Route('/membre/menu/ajouterIdée', name: 'app_addGiftIdea')]
     #[IsGranted('ROLE_MEMBRE')]
    public function add( Request $request, EntityManagerInterface $em): Response
    {
        $idea = new Gift();

         //create the form
        $form = $this->createForm(IdeaType::class, $idea);
        $form->handleRequest($request);
        $idea->setUser($idea->getUser());

        
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



     //modify the idea
 #[Route('/membre/menu/ModifierIdée/{id}', name: 'app_modifyIdea')]
    #[IsGranted('ROLE_MEMBRE')]
    public function modifyIdea(Request $request,EntityManagerInterface $em , $id): Response
    {

        //get the idea
        $idea = $em->getRepository(Gift::class)->find($id);

        $form= $this->createForm(IdeaType::class, $idea);

        //get the actual information 
        $title = $idea->getTitle();
        $comment = $idea->getComment();
        $picture = $idea->getPicture();
        $price = $idea->getPrice();
        $user = $idea->getUser();

        //fill the form with old info
        $form->get('title')->setData($title);
        $form->get('comment')->setData($comment);
        $form->get('picture')->setData($picture);
        $form->get('price')->setData($price);
        $form->get('user')->setData($user);
        

        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid())
        {
         //set up the new role into the database
        $title = $form->get('title')->getData();
        $idea->setTitle($title);

        $comment = $form->get('comment')->getData();
        $idea->setComment($comment);

        $picture = $form->get('picture')->getData();
        $idea->setPicture($picture);

        $price = $form->get('price')->getData();  
        $idea->setPrice($price);  

        $user = $form->get('user')->getData();  
        $idea->setUser($user); 
     

        $em-> flush();

             $this->addFlash('success', 'Idée mise à jour avec succès !');          
            return $this->redirectToRoute('app_idee');
           
           
        } 
          return $this->render("home/ajouter.html.twig", ["form" => $form]);
     }









}
