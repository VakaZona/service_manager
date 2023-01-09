<?php

namespace App\Controller\Admin;

use App\Entity\Defect;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class DefectCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Defect::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id', 'ID')->onlyOnIndex(),
            TextField::new('name', 'Название'),
            IntegerField::new('price', 'Цена'),
            DateTimeField::new('createdDate', 'Дата создания')->onlyOnIndex(),
            DateTimeField::new('modifiedDate', 'Дата обновления')->onlyOnIndex(),
        ];
    }
}
