<?php

namespace App\Controller;

use App\Repository\EventsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Requirement\Requirement;

class EventsController extends AbstractController
{
    #[Route('/evenements/{id}', name: 'app_events', requirements:['id' => Requirement::ASCII_SLUG,], defaults:['id'=>'tous'])]
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
                return $this->render('events/events.html.twig', [
                    'events' => $events,
                ]);
            }
        } else {
            $event = $eventsRepository->find($id);
            if($event === null) {
                throw $this->createNotFoundException('Aucun événement trouvé');
            } else {
                $place = $event->getPlaces();
                return $this->render('events/event.html.twig', [
                    'event' => $event,
                    'place' => $place,
                ]);
            }
        }
    }
}
