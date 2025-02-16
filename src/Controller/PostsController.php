<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PostsController extends AbstractController
{
    #[Route('/posts', name: 'app_posts')]
    public function posts(): Response
    {
        return $this->render('posts/index.html.twig', [
            'controller_name' => 'PostsController',
        ]);
    }

    #[Route('/', name: 'app_index')]
    public function index(): Response
    {
        return $this->render('index.html.twig', [
            'controller_name' => 'PostsController',
        ]);
    }
}
