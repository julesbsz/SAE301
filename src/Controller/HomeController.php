<?php

namespace App\Controller;

use App\Repository\EventsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Requirement\Requirement;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home', requirements:['id' => Requirement::ASCII_SLUG,], defaults:['id'=>'tous'])]
  public function index(
        $id,
        EventsRepository $eventsRepository,
    ): Response
    {
        if($id === 'tous') {
            $events = $eventsRepository->findAll();

            if($events === null) {
                throw $this->createNotFoundException('Aucun événement trouvé');
            } else {
                return $this->render('home/index.html.twig', [
                    'events' => $events,
                ]);
            }
        } else {
            $event = $eventsRepository->find($id);
            if($event === null) {
                throw $this->createNotFoundException('Aucun événement trouvé');
            } else {
                $place = $event->getPlaces();
                return $this->render('home/index.html.twig', [
                    'event' => $event,
                    'place' => $place,
                ]);
            }
        }
    }
}
