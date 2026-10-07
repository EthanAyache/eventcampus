<?php

namespace App\Service;

class Evenements
{
    public function getEvents()
    {
        return [
            1 => [
                'id' => 1,
                'titre' => 'Soirée Étudiante Halloween',
                'description' => 'Grande soirée costumée pour célébrer Halloween au campus !',
                'date_debut' => '2024-10-31 20:00:00',
                'date_fin' => '2024-11-01 02:00:00',
                'lieu' => 'Amphithéâtre Central',
                'categorie' => 'festif',
                'organisateur' => 'BDE Campus',
                'prix' => 8.0,
                'places_disponibles' => 150,
                'places_totales' => 200,
                'image' => 'halloween.jpg',
                'statut' => 'ouvert'
            ],
            2 => [
                'id' => 2,
                'titre' => 'Tournoi de Football Inter-Promos',
                'description' => 'Affrontez les autres promotions lors d\'un tournoi à 5 contre 5. Équipes de 8 joueurs maximum.',
                'date_debut' => '2024-11-09 14:00:00',
                'date_fin' => '2024-11-09 18:00:00',
                'lieu' => 'Stade Universitaire',
                'categorie' => 'sportif',
                'organisateur' => 'Association Sportive',
                'prix' => 5.0,
                'places_disponibles' => 0,
                'places_totales' => 64,
                'image' => 'football.jpg',
                'statut' => 'complet'
            ],
            3 => [
                'id' => 3,
                'titre' => 'Exposition Photo Étudiante',
                'description' => 'Découvrez les plus belles photos réalisées par les étudiants du campus sur le thème de la ville.',
                'date_debut' => '2024-11-14 10:00:00',
                'date_fin' => '2024-11-14 19:00:00',
                'lieu' => 'Galerie du Bâtiment A',
                'categorie' => 'culturel',
                'organisateur' => 'Club Photo',
                'prix' => 0.0,
                'places_disponibles' => 80,
                'places_totales' => 100,
                'image' => 'expo-photo.jpg',
                'statut' => 'ouvert'
            ],
            4 => [
                'id' => 4,
                'titre' => 'Forum des Associations',
                'description' => 'Rencontrez toutes les associations du campus et découvrez comment vous engager.',
                'date_debut' => '2024-11-20 12:00:00',
                'date_fin' => '2024-11-20 17:00:00',
                'lieu' => 'Hall Principal',
                'categorie' => 'associatif',
                'organisateur' => 'Bureau de la Vie Étudiante',
                'prix' => 0.0,
                'places_disponibles' => 250,
                'places_totales' => 300,
                'image' => 'forum-associations.jpg',
                'statut' => 'ouvert'
            ],
            5 => [
                'id' => 5,
                'titre' => 'Nuit du Jazz',
                'description' => 'Concert de jazz avec les groupes étudiants du campus. Événement annulé pour cause de travaux dans l\'auditorium.',
                'date_debut' => '2024-12-06 20:00:00',
                'date_fin' => '2024-12-06 23:30:00',
                'lieu' => 'Auditorium',
                'categorie' => 'culturel',
                'organisateur' => 'Bureau des Arts',
                'prix' => 10.0,
                'places_disponibles' => 63,
                'places_totales' => 150,
                'image' => 'nuit-jazz.jpg',
                'statut' => 'annule'
            ],
            6 => [
                'id' => 6,
                'titre' => 'Collecte Solidaire de Noël',
                'description' => 'Collecte de jouets, vêtements chauds et denrées non périssables au profit des associations locales.',
                'date_debut' => '2024-12-10 09:00:00',
                'date_fin' => '2024-12-10 18:00:00',
                'lieu' => 'Hall Principal',
                'categorie' => 'associatif',
                'organisateur' => 'Association Solidarité Campus',
                'prix' => 0.0,
                'places_disponibles' => 100,
                'places_totales' => 100,
                'image' => 'collecte-noel.jpg',
                'statut' => 'ouvert'
            ],
            7 => [
                'id' => 7,
                'titre' => 'Tournoi de Basket 3x3',
                'description' => 'Tournoi de basket en équipes de 3 joueurs. Inscription par équipe, niveau débutant accepté.',
                'date_debut' => '2024-12-14 13:00:00',
                'date_fin' => '2024-12-14 18:00:00',
                'lieu' => 'Gymnase du Campus',
                'categorie' => 'sportif',
                'organisateur' => 'Association Sportive',
                'prix' => 3.0,
                'places_disponibles' => 18,
                'places_totales' => 48,
                'image' => 'basket.jpg',
                'statut' => 'ouvert'
            ],
            8 => [
                'id' => 8,
                'titre' => 'Soirée d\'Intégration',
                'description' => 'Soirée DJ pour accueillir les nouveaux étudiants et lancer l\'année en musique.',
                'date_debut' => '2024-09-12 21:00:00',
                'date_fin' => '2024-09-13 02:00:00',
                'lieu' => 'Salle des Fêtes',
                'categorie' => 'festif',
                'organisateur' => 'BDE Campus',
                'prix' => 5.0,
                'places_disponibles' => 12,
                'places_totales' => 300,
                'image' => 'integration.jpg',
                'statut' => 'termine'
            ],
        ];
    }
}
