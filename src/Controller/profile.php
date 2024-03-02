<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/profile')]
class profile extends AbstractController
{
    #[Route(name: 'app_profile')]
    public function show(): Response
    {
        return $this->render('profile/profile.html.twig');
    }
}