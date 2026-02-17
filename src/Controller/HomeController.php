<?php

namespace App\Controller;

use App\Entity\Gift;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Form\IdeaType;
use App\Repository\GiftRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Doctrine\ORM\EntityManagerInterface;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_menu')]
    public function menu(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


    // route for adding an idea 
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


     #[Route('/membre/famille', name: 'app_family')]
     #[IsGranted('ROLE_MEMBRE')]
    public function family(): Response
    {
        return $this->render('home/famille.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

     
}
