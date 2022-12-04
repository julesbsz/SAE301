<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Session\Session;

class SecurityController extends AbstractController
{
    #[Route(path: '/connexion', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
         if ($this->getUser()) {
             return $this->redirectToRoute('app_home');
         }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    #[Route(path: '/deconnexion', name: 'app_logout')]
    public function logout(): \Symfony\Component\HttpFoundation\RedirectResponse
    {
        return $this->redirectToRoute('app_home');
    }

    #[Route(path: '/delete-account/{id}', name: 'app_delete_account')]
    public function deleteUser($id, ManagerRegistry $doctrine, Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
        $currentUserId = $this->getUser()->getId();
        if ($currentUserId == $id) {

            $entityManager = $doctrine->getManager();
            $user = $entityManager->getRepository(User::class)->find($id);
            $orders = $user->getOrders();

            if($orders) {
                foreach($orders as $order) {
                    $entityManager->remove($order);
                }
            }

            $entityManager->remove($user);
            $entityManager->flush();
            $session = new Session();
            $session->invalidate();
            return $this->redirectToRoute('app_logout');
        }
        return $this->redirectToRoute('app_home');
    }
}
