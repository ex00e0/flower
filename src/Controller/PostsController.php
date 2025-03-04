<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

use Symfony\Bundle\SecurityBundle\Security;

use App\Entity\User;
use App\Form\RegistrationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;
use App\Security\LoginAuthenticator;

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

    #[Route('/login', name: 'app_login')]
    public function login(): Response
    {
        return $this->render('login.html.twig', [
            'controller_name' => 'PostsController',
        ]);
    }
    #[Route('/reg', name: 'app_reg')]
    public function reg(): Response
    {
        $form = $this->createForm(RegistrationType::class);
        $errors = []; 
        return $this->render('reg.html.twig', [
            'controller_name' => 'PostsController',
            'errors' => $errors,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/reg_db', name: 'app_register')]
    public function register(
        Request $request,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher,
        UserAuthenticatorInterface $userAuthenticator,
        LoginAuthenticator $authenticator, // Передаем кастомный аутентификатор
        Security $security
    ): Response {
        $user = new User();
        $form = $this->createForm(RegistrationType::class, $user);
        $form->handleRequest($request);
        $errors = []; 
        if ($form->isSubmitted() && $form->isValid()) {
            // Хешируем пароль
            $hashedPassword = $passwordHasher->hashPassword($user, $user->getPassword());
            $user->setPassword($hashedPassword);
            $user->setRole('ROLE_USER');

            // Сохраняем пользователя в базе данных
            $entityManager->persist($user);
            $entityManager->flush();

            // Перенаправление на страницу входа
            $userAuthenticator->authenticateUser(
                $user,
                $authenticator,
                $request
            );
            return $this->redirectToRoute('app_index');
        } else {
            foreach ($form->getErrors(true, true) as $error) {
                $errors[] = $error->getMessage();
            }
        }
        return $this->render('reg.html.twig', [
            'errors' => $errors,
            'form' => $form->createView(),
        ]);
    }
}
