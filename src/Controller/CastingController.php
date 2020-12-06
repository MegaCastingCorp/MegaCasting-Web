<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Castings;

class CastingController extends AbstractController
{
    /**
     * @Route("/casting", name="casting")
     */
    public function index()
    {
        $repo = $this -> getDoctrine() -> getRepository(Castings::class);

        $castings = $repo -> findAll();

        return $this->render('casting/index.html.twig', [
            'controller_name' => 'CastingController',
            'castings' => $castings
        ]);
    }
}
