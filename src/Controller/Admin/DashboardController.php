<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Events;
use App\Entity\User;
use App\Entity\Orders;
use App\Entity\Places;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        return $this->render('Admin/dashboard.html.twig');

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        // return $this->redirect($adminUrlGenerator->setController(OneOfYourCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Administration Dashboard');
    }

    public function configureMenuItems(): iterable
    {
        return [
            MenuItem::linktoDashboard('Dashboard', 'fa fa-home'),

            MenuItem::section('Site Web'),
            MenuItem::linkToUrl('Accueil', 'fas fa-globe', '/'),

            MenuItem::section('Événements'),
            MenuItem::linkToCrud('Tous les événements', 'fas fa-list', Events::class)
                ->setDefaultSort(['date' => 'DESC']),
            MenuItem::linkToCrud('Ajouter', 'fas fa-plus', Events::class)
                ->setAction('new'),
            MenuItem::linkToCrud('Détails', 'fas fa-circle-info', Events::class)
                ->setAction('detail'),

            MenuItem::section('Utilisateurs'),
            MenuItem::linkToCrud('Tous les utilisateurs', 'fas fa-list', User::class)
                ->setDefaultSort(['id' => 'ASC']),
            MenuItem::linkToCrud('Ajouter', 'fas fa-plus', User::class)
                ->setAction('new'),
            MenuItem::linkToCrud('Détails', 'fas fa-circle-info', User::class)
                ->setAction('detail'),

            MenuItem::section('Lieux'),
            MenuItem::linkToCrud('Tous les lieux', 'fas fa-list', Places::class)
                ->setDefaultSort(['id' => 'ASC']),
            MenuItem::linkToCrud('Ajouter', 'fas fa-plus', Places::class)
                ->setAction('new'),
            MenuItem::linkToCrud('Détails', 'fas fa-circle-info', Places::class)
                ->setAction('detail'),

            MenuItem::section('Commandes'),
            MenuItem::linkToCrud('Toutes les commandes', 'fas fa-list', Orders::class)
                ->setDefaultSort(['id' => 'ASC']),
            MenuItem::linkToCrud('Ajouter', 'fas fa-plus', Orders::class)
                ->setAction('new'),
            MenuItem::linkToCrud('Détails', 'fas fa-circle-info', Orders::class)
                ->setAction('detail'),

            MenuItem::section('Autres'),
            MenuItem::linkToLogout('Se déconnecter', 'fas fa-right-from-bracket'),

        ];
    }
}
