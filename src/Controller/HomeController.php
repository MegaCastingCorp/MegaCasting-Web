<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig');
    }

    /**
     * @Route ("/home/casting", name="list_casting")
     */
    public function castings()
    {
        return $this->render('home/casting.html.twig');
    }

    /**
     * @Route ("/home/contact", name="contact")
     */
    public function contact()
    {
        return $this->render('home/contact.html.twig');
    }
}
