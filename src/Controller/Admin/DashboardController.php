<?php

namespace App\Controller\Admin;

use App\Entity\Client;
use App\Entity\Defect;
use App\Entity\Equipment;
use App\Entity\JobTitle;
use App\Entity\Material;
use App\Entity\Personal;
use App\Entity\TypeEquipment;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/", name="admin")
     */
    public function index(): Response
    {
        // redirect to some CRUD controller
        $routeBuilder = $this->get(AdminUrlGenerator::class);

        return $this->redirect($routeBuilder->setController(PersonalCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Service Manager');
    }

    public function configureMenuItems(): iterable
    {
//        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
        yield MenuItem::linkToCrud('Персонал', 'fa fa-list', Personal::class);
        yield MenuItem::linkToCrud('Должности', 'fa fa-list', JobTitle::class);
        yield MenuItem::linkToCrud('Клиенты', 'fa fa-list', Client::class);
        yield MenuItem::linkToCrud('Материалы', 'fa fa-list', Material::class);
        yield MenuItem::linkToCrud('Тип оборудования', 'fa fa-list', TypeEquipment::class);
        yield MenuItem::linkToCrud('Оборудование', 'fa fa-list', Equipment::class);
        yield MenuItem::linkToCrud('Неисправности', 'fa fa-list', Defect::class);
    }
}
