<?php

namespace App\Controller\Admin;

use App\Entity\TypeEquipment;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class TypeEquipmentCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return TypeEquipment::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('Id', 'ID')->onlyOnIndex(),
            TextField::new('name', 'Название'),
            DateTimeField::new('createdDate', 'Дата создания')->onlyOnIndex(),
            DateTimeField::new('modifiedDate', 'Дата обновления')->onlyOnIndex(),
        ];
    }
}
