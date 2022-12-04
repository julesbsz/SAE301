<?php

namespace App\Controller;

use App\Repository\OrdersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Snappy\Pdf;

class InvoiceController extends AbstractController
{
    #[Route('/facture/{id}', name: 'app_invoice')]
    public function index($id, OrdersRepository $ordersRepository, Pdf $pdf): Response
    {
        $order = $ordersRepository->find($id);
        $user = $this->getUser();

        if($order->getUser() !== $user) {
            return $this->redirectToRoute('app_home');
        }

        $products = json_decode($order->getProducts(), true);
        $totalHT = 0;
        $totalTTC = 0;
        $totalTVA = 0;

        foreach($products as $product) {
            $totalHT += $product['price'] * $product['quantity'];
            $totalTVA += ($product['price'] * $product['quantity']) * (20 / 100);
            $totalTTC += ($product['price'] * $product['quantity']) * (120 / 100);
        }

        $html = $this->renderView('invoice/index.html.twig', array(
            'order'  => $order,
            'products' => $products,
            'totalHT' => $totalHT,
            'totalTVA' => $totalTVA,
            'totalTTC' => $totalHT + $totalTVA
        ));

        $pdf->setTimeout(60);
        $pdf->setOption('enable-local-file-access', true);

        return new Response(
            $pdf->getOutputFromHtml($html),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'attachment; filename="facture'.$order->getId().'.pdf"'
            )
        );
    }
}
