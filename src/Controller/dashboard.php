<?php

namespace App\Controller;

use App\Entity\Administratif;
use App\Entity\Enseignant;
use App\Repository\ArticleRepository;
use App\Repository\EventRepository;
use App\Repository\ProductRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/dashboard')]

class dashboard  extends AbstractController
{
    #[Route(name: 'app_ens')]
    public function show(): Response
    {
        return $this->render('dashboard/index.html.twig');
    }

}