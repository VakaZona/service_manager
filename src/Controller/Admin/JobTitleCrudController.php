<?php

namespace App\Controller\Admin;

use App\Entity\JobTitle;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class JobTitleCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return JobTitle::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id', 'Id')->onlyOnIndex(),
            TextField::new('jobTitle', 'Job Title'),
            IntegerField::new('salary', 'Salary'),
            AssociationField::new('personals', 'Personals'),
            DateTimeField::new('createdDate', 'Created Date')->onlyOnIndex(),
            DateTimeField::new('modifiedDate', 'Modified Date')->onlyOnIndex()
        ];
    }
}
