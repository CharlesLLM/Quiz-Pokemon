<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

final class UserController extends AbstractController
{
    #[Route(path: "/users", name: "users")]
    public function users(UserRepository $userRepository): Response
    {
        $liste_users =  $userRepository->findAll();

        return $this->render('user/users.html.twig', [
            'users' => $liste_users,
        ]);
    }

    #[Route(path: '/user/{id}', name: 'user')]
    public function showUser(User $user): Response
    {
        $nom_complet = $user->getPrenom()." ".$user->getNom();

        return $this->render('user/index.html.twig', [
            'nom' => $nom_complet,
        ]);
    }
}