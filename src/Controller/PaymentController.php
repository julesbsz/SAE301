<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\PaymentFormType;

class PaymentController extends AbstractController
{
    #[Route('/paiement/{status}', name: 'app_payment', requirements: ['status' => 'success|cancel'], defaults: ['status' => ''])]
    public function index(
        Request $request
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
                // generate pdf and send email
                return $this->redirectToRoute('app_payment', ['status' => "success"]);
            }

            return $this->renderForm('payment/index.html.twig', [
                'form' => $form,
            ]);
        }
    }
}
