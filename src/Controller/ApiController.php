<?php

namespace App\Controller;

use App\Service\Evenements;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ApiController extends AbstractController
{
    #[Route('/api/evenements', name: 'app_api')]
    public function evenements(): JsonResponse
    {
        return new JsonResponse(new Evenements()->getEvents(), 200, []);
    }

    #[Route('/api/evenements/{id}', name: 'app_api_details', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function id(int $id): JsonResponse
    {
    return new JsonResponse(new Evenements()->getEvents()[$id], 200, []);
    }
}
