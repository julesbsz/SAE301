<?php

namespace App\Controller;

use App\Repository\EventsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Requirement\Requirement;

class EventsController extends AbstractController
{
    #[Route('/evenements/{id}', name: 'app_events', requirements:['id' => Requirement::ASCII_SLUG,], defaults:['id'=>'tous'])]
    public function index(
        Request $request,
        $id,
        EventsRepository $eventsRepository,
    ): Response
    {
        if($id === 'tous') {
            $searchform = $this->createForm(SearchType::class, null );
            $searchform->handleRequest($request);

            if ($searchform->isSubmitted() && $searchform->isValid()) {
                $search = $searchform->getData();
                $events = $eventsRepository->findBySearch($search);
            } else {
                $events = $eventsRepository->findAll();
            }

            if($events === null) {
                throw $this->createNotFoundException('Aucun événement trouvé');
            } else {
                return $this->render('events/events.html.twig', [
                    'events' => $events,
                    'form' => $searchform->createView(),
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
