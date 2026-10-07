<?php

namespace App\Controller;

use App\Service\Evenements;
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
            'evenements' => (new Evenements())->getEvents(),
        ]);
    }


    #[Route('/evenements/categories/{categorie}', name: 'app_evenement_categories', methods: ['GET'], requirements: ['categorie' => 'culturel|sportif|associatif|festif'])]
    public function categories(string $categorie, Evenements $evenements): Response
    {
        $liste = array_filter(
            $evenements->getEvents(),
            fn($evenement) => $evenement['categorie'] === $categorie
        );

        return $this->render('evenement/categorie.html.twig', [
            'evenements' => $liste,
            'categorie' => $categorie,

        ]);
    }

    #[Route('/evenements/{id}', name: 'app_evenement_details', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function id(int $id): Response
    {
    
        return $this->render('evenement/show.html.twig', [
            'controller_name' => 'EvenementController',
            'evenement' => (new Evenements())->getEvents()[$id] ?? null,
        ]);
    }


    #[Route('/evenements/par-mois/{annee}/{mois}', name: 'app_evenement_par_mois', methods: ['GET'], requirements: ['annee' => '\d+', 'mois' => '\d+'])]
    public function parMois(int $annee, int $mois, Evenements $evenements): Response
    {
        // Si l'année ou le mois n'est pas valide, on retourne à la liste avec un message d'erreur
        if ($annee < 2024 || $annee > 2030 || $mois < 1 || $mois > 12) {
            $this->addFlash('danger', 'Date invalide : l\'année doit être entre 2024 et 2030 et le mois entre 1 et 12.');
            return $this->redirectToRoute('app_evenement');
        }

        // On garde seulement les événements du mois demandé
        $liste = [];
        foreach ($evenements->getEvents() as $evenement) {
            $date = new \DateTime($evenement['date_debut']);
            if ($date->format('Y') == $annee && $date->format('m') == $mois) {
                $liste[] = $evenement;
            }
        }

        // Si aucun événement ce mois-là, on retourne aussi à la liste avec un message d'erreur
        if (empty($liste)) {
            $this->addFlash('danger', 'Aucun événement pour le mois ' . $mois . '/' . $annee . '.');
            return $this->redirectToRoute('app_evenement');
        }

        return $this->render('evenement/parMois.html.twig', [
            'evenements' => $liste,
            'annee' => $annee,
            'mois' => $mois,
        ]);
    }

}
