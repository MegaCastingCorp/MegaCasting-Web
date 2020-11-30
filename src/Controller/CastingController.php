<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CastingController extends AbstractController
{
    /**
     * @Route("/casting", name="casting")
     */
    public function index()
    {
        return $this->render('casting/index.html.twig', [
            'controller_name' => 'CastingController',
        ]);
    }
}
