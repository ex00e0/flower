<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

use Symfony\Bundle\SecurityBundle\Security;

use App\Entity\User;
use App\Entity\Cart;
use App\Entity\Item;
use App\Entity\Order;

use App\Form\RegistrationType;
use App\Form\AuthType;
use App\Form\ItemType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\String\Slugger\SluggerInterface;

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
    public function index( EntityManagerInterface $entityManager): Response
    {
        $catalogue = $entityManager->createQuery(
            'SELECT i FROM App\Entity\Item i WHERE i.last > :minLast'
        )->setParameter('minLast', 0)->setMaxResults(4)->getResult();
        
        return $this->render('index.html.twig', [
            'catalogue' => $catalogue,
            'controller_name' => 'PostsController',
        ]);
    }

    #[Route('/cart', name: 'cart')]
    public function cart(Security $security, EntityManagerInterface $entityManager): Response
    {
        $user = $security->getUser();
    
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }
    
        $cartItems = $entityManager->getRepository(Cart::class)->findBy(['user_id' => $user]);
    
        return $this->render('cart.html.twig', [
            'cartItems' => $cartItems,
        ]);
    }

    #[Route('/make_order/{sum}', name: 'make_order')]
public function makeOrder(
    int $sum, 
    EntityManagerInterface $entityManager, 
    Security $security
): Response {
    $user = $security->getUser();

    if (!$user) {
        $this->addFlash('error', 'Для оформления заказа необходимо авторизоваться.');
        return $this->redirectToRoute('login'); 
    }

    $cartItems = $entityManager->getRepository(Cart::class)->findBy(['user_id' => $user]);

    if (empty($cartItems)) {
        $this->addFlash('error', 'Ваша корзина пуста.');
        return $this->redirectToRoute('cart');
    }

    $compound = [];
    foreach ($cartItems as $cartItem) {
        $itemId = $cartItem->getItem()->getId(); 
        if (isset($compound[$itemId])) {
            $compound[$itemId] += 1; 
        } else {
            $compound[$itemId] = 1; 
        }
    }

    $order = new Order();
    $order->setUserId($user);
    $order->setSum($sum);
    $order->setDate(new \DateTime());
    $order->setCompound($compound); 

    $entityManager->persist($order);
    $entityManager->flush();

    $cartItems = $entityManager->getRepository(Cart::class)->findBy(['user_id' => $user]);
    foreach ($cartItems as $cartItem) {
        $entityManager->remove($cartItem);
    }
    $entityManager->flush();

    $this->addFlash('success', 'Заказ успешно оформлен!');
    return $this->redirectToRoute('cart'); 
}


    #[Route('/catalogue', name: 'catalogue')]
    public function catalogue(EntityManagerInterface $entityManager): Response
    {
    
        $catalogue = $entityManager->createQuery(
            'SELECT i FROM App\Entity\Item i WHERE i.last > :minLast'
        )->setParameter('minLast', 0)->getResult();
    
        return $this->render('catalogue.html.twig', [
            'catalogue' => $catalogue,
        ]);
    }

    #[Route('/orders', name: 'orders')]
    public function orders(EntityManagerInterface $entityManager, Security $security): Response
    {
        $user = $security->getUser();

        if (!$user) {
            $this->addFlash('error', 'Для просмотра заказов необходимо авторизоваться.');
            return $this->redirectToRoute('login'); 
        }

        $orders = $entityManager->getRepository(Order::class)->findBy(['user_id' => $user], ['date' => 'DESC']);

        $itemIds = [];
        foreach ($orders as $order) {
            $compound = $order->getCompound();
            if (is_array($compound)) {
                $itemIds = array_merge($itemIds, array_keys($compound));
            }
        }
    
        $items = $entityManager->getRepository(Item::class)->findBy(['id' => array_unique($itemIds)]);
    
        $itemNames = [];
        foreach ($items as $item) {
            $itemNames[$item->getId()] = $item->getName();
        }

        return $this->render('order.html.twig', [
            'orders' => $orders,
            'itemNames' => $itemNames,
        ]);
    }

    
    #[Route('/item/{id}', name: 'item_detail')]
    public function itemDetail(Item $item, EntityManagerInterface $entityManager, Security $security): Response
    {
        $user = $security->getUser();
    
        $cartItems = $entityManager->getRepository(Cart::class)->findBy(['user_id' => $user]);

        return $this->render('item_detail.html.twig', [
            'item' => $item,
            'cartItems' => $cartItems,
        ]);
    }

    #[Route('/cart/add/{id}', name: 'cart_add')]
public function addToCart(int $id, EntityManagerInterface $entityManager, Security $security, Request $request): Response
{
    $user = $security->getUser();

    $item = $entityManager->getRepository(Item::class)->find($id);
    if (!$item) {
        throw $this->createNotFoundException('Товар не найден.');
    }

    $cartItem = $entityManager->getRepository(Cart::class)->findOneBy([
        'user_id' => $user,
        'item_id' => $item
    ]);

    if ($cartItem) {
        if($item->getLast() == 0) {
            $this->addFlash('success', 'Товар закончился');
        }
        else {
            $cartItem->setAddon($cartItem->getAddon() + 1);
            $item->setLast($item->getLast() - 1);
            $this->addFlash('success', 'Количество товара увеличено');
        }
        

    } else {
        $cartItem = new Cart();
        $cartItem->setUserId($user);
        $cartItem->setItemId($item);
        $cartItem->setAddon(1);
        $entityManager->persist($cartItem);
        $item->setLast($item->getLast() - 1);
        $this->addFlash('success', 'Товар добавлен в корзину');
    }

    $entityManager->flush();

    $referer = $request->headers->get('referer');
    
    return $this->redirect($referer ?? $this->generateUrl('cart'));
}

#[Route('/cart/remove/{id}', name: 'cart_remove')]
public function removeFromCart(int $id, EntityManagerInterface $entityManager, Security $security, Request $request): Response
{
    $user = $security->getUser();
    $item = $entityManager->getRepository(Item::class)->find($id);
    if (!$item) {
        throw $this->createNotFoundException('Товар не найден.');
    }
    $cartItem = $entityManager->getRepository(Cart::class)->findOneBy([
        'user_id' => $user,
        'item_id' => $id
    ]);

    if ($cartItem) {
        if ($cartItem->getAddon() > 1) {
            $cartItem->setAddon($cartItem->getAddon() - 1);
            $item->setLast($item->getLast() + 1);
            $this->addFlash('success', 'Количество товара уменьшено');
        } else {
            $entityManager->remove($cartItem);
            $item->setLast($item->getLast() + 1);
            $this->addFlash('success', 'Товар удален из корзины');
        }
        $entityManager->flush();
    }

    

    $referer = $request->headers->get('referer');
    
    return $this->redirect($referer ?? $this->generateUrl('cart'));
}



    #[Route('/login', name: 'app_login')]
    public function login(): Response
    {
        $form = $this->createForm(AuthType::class);
        $errors = []; 
        return $this->render('login.html.twig', [
            'controller_name' => 'PostsController',
            'errors' => $errors,
            'form' => $form->createView(),
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
        LoginAuthenticator $authenticator, 
        Security $security
    ): Response {
        $user = new User();
        $form = $this->createForm(RegistrationType::class, $user);
        $form->handleRequest($request);
        $errors = []; 
        if ($form->isSubmitted() && $form->isValid()) {
            $hashedPassword = $passwordHasher->hashPassword($user, $user->getPassword());
            $user->setPassword($hashedPassword);
            $user->setRole('ROLE_USER');

            $entityManager->persist($user);
            $entityManager->flush();

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

    #[Route('/login_db', name: 'login_db')]
    public function login_db(
        Request $request,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher,
        UserAuthenticatorInterface $userAuthenticator,
        LoginAuthenticator $authenticator, 
        Security $security
    ): Response {
        if ($security->getUser()) {
            return $this->redirectBasedOnRole($security->getUser());
        }
    
        $form = $this->createForm(AuthType::class);
        $form->handleRequest($request);
        $errors = [];
    
        if ($form->isSubmitted() && $form->isValid()) {
            $login = $form->get('login')->getData();
            $password = $form->get('password')->getData();
    
            $user = $entityManager->getRepository(User::class)->findOneBy(['login' => $login]);
            
            if (!$user) {
                $errors[] = 'Пользователь с таким email не найден';
            } else if (!$passwordHasher->isPasswordValid($user, $password)) {
                $errors[] = 'Неверный пароль';
            } else {
                $response =  $userAuthenticator->authenticateUser(
                    $user,
                    $authenticator,
                    $request
                );
                return $this->redirectBasedOnRole($user);
            }
        } else {
            foreach ($form->getErrors(true, true) as $error) {
                $errors[] = $error->getMessage();
            }
        }
    
        return $this->render('login.html.twig', [
            'errors' => $errors,
            'form' => $form->createView(),
        ]);
    }

    private function redirectBasedOnRole(User $user): Response
{
    if (in_array('ROLE_ADMIN', $user->getRoles(), true)) {
        return $this->redirectToRoute('admin_orders'); 
    }

    return $this->redirectToRoute('cart'); // Перенаправление на страницу пользователя
}

    #[Route('/logout', name: 'logout', methods: ['GET'])]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout firewall.');
    }

    #[Route('/admin_orders', name: 'admin_orders')]
    public function admin_orders( EntityManagerInterface $entityManager): Response
    {
        $orders = $entityManager->getRepository(Order::class)->findBy([],['date' => 'DESC']);
        $itemIds = [];
        foreach ($orders as $order) {
            $compound = $order->getCompound();
            if (is_array($compound)) {
                $itemIds = array_merge($itemIds, array_keys($compound));
            }
        }
    
        $items = $entityManager->getRepository(Item::class)->findBy(['id' => array_unique($itemIds)]);
    
        $itemNames = [];
        foreach ($items as $item) {
            $itemNames[$item->getId()] = $item->getName();
        }

        return $this->render('admin_orders.html.twig', [
            'orders' => $orders,
            'itemNames' => $itemNames,
        ]);
    }

    #[Route('/update-order-status/{id}', name: 'update_order_status', methods: ['POST'])]
public function updateOrderStatus(int $id, Request $request, EntityManagerInterface $entityManager): JsonResponse
{
    $order = $entityManager->getRepository(Order::class)->find($id);
    
    if (!$order) {
        return new JsonResponse(['success' => false, 'message' => 'Заказ не найден'], Response::HTTP_NOT_FOUND);
    }

    $data = json_decode($request->getContent(), true);
    
    if (!isset($data['status'])) {
        return new JsonResponse(['success' => false, 'message' => 'Некорректные данные'], Response::HTTP_BAD_REQUEST);
    }

    $order->setStatus($data['status']);
    $entityManager->persist($order);
    $entityManager->flush();

    return new JsonResponse(['success' => true, 'message' => 'Статус заказа обновлён']);
}

#[Route('/admin_items', name: 'admin_items')]
public function admin_items( EntityManagerInterface $entityManager): Response
{
    $items = $entityManager->getRepository(Item::class)->findAll();

    return $this->render('admin_items.html.twig', [
        'items' => $items,
    ]);
}




#[Route('/create', name: 'item_create')]
    public function create(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $item = new Item();
        $form = $this->createForm(ItemType::class, $item);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('imageFile')->getData();

            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('images_directory'), // Директория хранения изображений (настраивается в services.yaml)
                        $newFilename
                    );
                } catch (FileException $e) {
                    $this->addFlash('error', 'Ошибка загрузки изображения.');
                    return $this->redirectToRoute('item_create');
                }

                $item->setImage($newFilename);
            }

            $entityManager->persist($item);
            $entityManager->flush();

            $this->addFlash('success', 'Товар успешно добавлен!');
            return $this->redirectToRoute('admin_items');
        }

        return $this->render('item_form.html.twig', [
            'form' => $form->createView(),
            'title' => 'Добавить товар',
            'item' => $item,
        ]);
    }

    #[Route('/edit/{id}', name: 'item_edit')]
    public function edit(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger, Item $item): Response
    {
        $form = $this->createForm(ItemType::class, $item);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('imageFile')->getData();

            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('images_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    $this->addFlash('error', 'Ошибка загрузки изображения.');
                    return $this->redirectToRoute('item_edit', ['id' => $item->getId()]);
                }

                $item->setImage($newFilename);
            }

            $entityManager->flush();

            $this->addFlash('success', 'Товар успешно обновлен!');
            return $this->redirectToRoute('admin_items');

        }

        return $this->render('item_form.html.twig', [
            'form' => $form->createView(),
            'title' => 'Редактировать товар',
            'item' => $item,
        ]);
    }

    #[Route('/delete/{id}', name: 'item_delete', methods: ['POST'])]
    public function delete(Request $request, EntityManagerInterface $entityManager, Item $item): Response
    {
        if ($this->isCsrfTokenValid('delete' . $item->getId(), $request->request->get('_token'))) {
            $entityManager->remove($item);
            $entityManager->flush();
            $this->addFlash('success', 'Товар удален.');
        }

        return $this->redirectToRoute('item_list');
    }

}



