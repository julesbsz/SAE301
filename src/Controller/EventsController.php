<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class EventsController extends AbstractController
{
    #[Route('/evenements', name: 'app_events')]
    public function index(
        EntityManagerInterface $entityManager,
        UserRepository $userRepository
    ): Response
    {
        $events = $userRepository->findAll();
        if($events === null) {
            throw $this->createNotFoundException('Aucun événement trouvé');
        } else {
            return $this->render('events/index.html.twig', [
                'events' => $events,
            ]);
        }
    }
}
