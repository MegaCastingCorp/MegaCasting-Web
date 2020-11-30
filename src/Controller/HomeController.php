<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    // Permet de rediriger la personnes quand elle appuis sur le boutons "Accueil"
    // Pour l'appeller il suffit de faire {{ path("home") }}
    public function index()
    {
        // Redirection vers la page index.html.twig
        return $this->render('home/index.html.twig');
    }
}
