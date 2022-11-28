<?php

namespace App\Controller\Admin;

use App\Entity\Places;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PlacesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Places::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
