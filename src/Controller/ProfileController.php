<?php

namespace App\Controller;

use App\Repository\OrdersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController
{
    #[Route('/compte', name: 'app_profile')]
    public function index(OrdersRepository $ordersRepository): Response
    {
        $user = $this->getUser();
        if(!$user) {
            return $this->redirectToRoute('app_login');
        } else {
            $orders = $ordersRepository->findBy(['user' => $user]);
            return $this->render('profile/index.html.twig', [
                'orders' => $orders,
            ]);
        }
    }
}
