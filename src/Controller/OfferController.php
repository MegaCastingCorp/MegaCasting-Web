<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Offer;


class OfferController extends AbstractController
{
    /**
     * @Route("/offer", name="offer")
     */
    public function index()
    {
        $repo = $this -> getDoctrine() -> getRepository(Offer::class);
        //$offers = $repo -> findAll();

        return $this->render('offer/index.html.twig', [
            'controller_name' => 'OfferController',
            //'offers' => $offers
        ]);
    }

    /**
     * @Route("/offer/{id}", name="showoffer")
     */
    public function showoffer($id){
        $repo = $this -> getDoctrine() -> getRepository(Offer::class);
        $offers = $repo -> find($id);

        return $this->render('offer/showoffer.html.twig', [
            'offers' => $offers
        ]);

    }
}
