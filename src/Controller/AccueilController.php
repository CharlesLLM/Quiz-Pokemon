<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class AccueilController extends AbstractController
{
    #[Route(path: "/accueil", name: "Accueil")]
    public function Accueil(Request $request): Response
    {
        return $this->render('accueil/accueil.html.twig', [
            'name' => 'Charles',
        ]);
    }
}