<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ShowCastingController extends AbstractController
{
    /**
     * @Route("/show/casting", name="show_casting")
     */
    public function index()
    {
        return $this->render('show_casting/index.html.twig', [
            'controller_name' => 'ShowCastingController',
        ]);
    }
}
