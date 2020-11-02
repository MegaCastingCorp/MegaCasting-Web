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

    /**
     * @Route ("/home/casting", name="list_casting")
     */
    public function castings()
    {
        // $repo = $this->getDoctrine()->getRepository(Castings::class) Il faut ajouter tout les castings
        return $this->render('home/casting.html.twig');
    }

    /**
     * @Route ("/home/contact", name="contact")
     */
    public function contact()
    {
        return $this->render('home/contact.html.twig');
    }

    /**
     * @Route ("/home/userpage", name="userpage")
     */
    public function userpage()
    {
        return $this->render('home/userpage.html.twig');
    }
}
