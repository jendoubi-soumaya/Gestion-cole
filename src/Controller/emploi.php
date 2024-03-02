<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/emploi')]
class emploi extends AbstractController
{
    #[Route(name: 'app_emploi')]
    public function show(): Response
    {
        return $this->render('profile/emploi.html.twig');
    }

}