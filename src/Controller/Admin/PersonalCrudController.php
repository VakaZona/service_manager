<?php

namespace App\Controller\Admin;

use App\Entity\Personal;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PersonalCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Personal::class;
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
