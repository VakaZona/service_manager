<?php

namespace App\Controller\Admin;

use App\Entity\Personal;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class PersonalCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Personal::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('Id', 'ID')->onlyOnIndex(),
            TextField::new('username', 'Login'),
            TextField::new('fullName', 'Full name'),
            IntegerField::new('salary', 'Salary'),
            DateField::new('dateStart', 'Date Start'),
        ];
    }
}
