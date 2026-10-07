<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class EvenementController extends AbstractController
{
    #[Route('/evenements', name: 'app_evenement')]
    public function index(): Response
    {
        return $this->render('evenement/index.html.twig', [
            'controller_name' => 'EvenementController',
        ]);
    }


    #[Route('/evenements/categories/{categorie}', name: 'app_evenement_categories', methods: ['GET'], requirements: ['categorie' => 'culturel|sportif|associatif|festif'])]
    public function categories(): Response
    {
        return $this->render('evenement/categories.html.twig', [
            'controller_name' => 'EvenementController',
        ]);
    }

    #[Route('/evenements/{id}', name: 'app_evenement_details', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function id(): Response
    {
        return $this->render('evenement/categories.html.twig', [
            'controller_name' => 'EvenementController',
        ]);
    }

}
