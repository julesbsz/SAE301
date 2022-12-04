<?php

namespace App\Controller;

use App\Entity\Orders;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Exception\ORMException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\PaymentFormType;

class PaymentController extends AbstractController
{
    #[Route('/paiement/{status}', name: 'app_payment', requirements: ['status' => 'success|cancel'], defaults: ['status' => ''])]
    public function index(
        Request $request,
        EntityManagerInterface $entityManager,
    ): Response
    {
        if($this->getUser() === null) {
            return $this->redirectToRoute('app_login', ['error' => 'Veuillez vous identifier pour accéder au paiement']);
        }

        if($request->get('status') === 'success') {
            return $this->render('payment/success.html.twig');
        } elseif($request->get('status') === 'cancel') {
            return $this->render('payment/cancel.html.twig');
        } else {
            $form = $this->createForm(PaymentFormType::class);

            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $data = $form->getData();
                $order = new Orders();
                $order->setDate(new \DateTime());
                $order->setFirstname($data['firstname']);
                $order->setLastname($data['lastname']);
                $order->setAddress($data['address']);
                $order->setCity($data['city']);
                $order->setZipcode($data['zip']);
                $order->setCountry($data['country']);
                $order->setPhone($data['phone']);
                $order->setUser($this->getUser());

                try {
                    $entityManager->persist($order);
                    $entityManager->flush();
                    return $this->redirectToRoute('app_payment', ['status' => "success"]);
                } catch (ORMException $e) {
                    return $this->redirectToRoute('app_payment', ['error' => 'Une erreur est survenue lors de la création de la commande']);
                }
            }

            return $this->renderForm('payment/index.html.twig', [
                'form' => $form,
            ]);
        }
    }
}
