<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomePageController extends AbstractController
{
    /**
     * Permet d'afficher la page d'accueil
     * @return Response
     */
    #[Route('/', name: 'home_page')]
    public function index(): Response
    {
        return $this->render('home_page/index.html.twig', [
            'page_name' => 'HomePage'
        ]);
    }
}
