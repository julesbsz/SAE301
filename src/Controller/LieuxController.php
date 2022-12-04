<?php

namespace App\Controller;

use App\Repository\PlacesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Requirement\Requirement;

class LieuxController extends AbstractController
{
    #[Route('/lieux/{id}', name: 'app_lieux', requirements:['id' => Requirement::ASCII_SLUG,], defaults:['id'=>'tous'])]
    public function index( $id, PlacesRepository $placesRepository,): Response
    {
        if($id === 'tous') {
            $places = $placesRepository->findAll();

            if($places === null) {
                throw $this->createNotFoundException('Aucun lieu trouvé');
            } else {
                return $this->render('lieux/lieux.html.twig', [
                    'places' => $places,
                ]);
            }
        } else {
            $place = $placesRepository->find($id);
            if($place === null) {
                throw $this->createNotFoundException('Aucun lieu trouvé');
            } else {
                $events = $place->getEvents();
                return $this->render('lieux/lieux.html.twig', [
                    'place' => $place,
                    'events' => $events,
                ]);
            }
        }
    }
}
