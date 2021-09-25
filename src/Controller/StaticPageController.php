<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StaticPageController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function homePage(): Response
    {
        return $this->render('static_page/home.html.twig', [
            'controller_name' => 'StaticPageController',
        ]);
    }

    #[Route('/reglement', name: 'rules_regulation')]
    public function rulesAndRegulation(): Response
    {
        return $this->render('static_page/rules.html.twig', [
            'controller_name' => 'StaticPageController',
        ]);
    }
}
