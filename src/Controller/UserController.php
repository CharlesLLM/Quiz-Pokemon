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
    // #[Route(path: "/articles", name: "articles")]
    // public function articles(UserRepository $userRepository , int $id): Response
    // {
    //     $user =  $userRepository->findBy(['id' => 1]);

    //     return $this->render('user/index.html.twig', [
    //         'user' => $user,
    //     ]);
    // }

    #[Route('/user/{id}', name: 'user_show')]
    public function showUser(User $user): Response
    {
        $nom_complet = $user->getPrenom()." ".$user->getNom();

        return $this->render('user/index.html.twig', [
            'nom' => $nom_complet,
        ]);
    }
}