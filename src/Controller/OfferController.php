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
        $offers = $repo -> findAll();

        return $this->render('offer/index.html.twig', [
            'controller_name' => 'OfferController',
            'offers' => $offers
        ]);
    }

    /**
     * @Route("/offer/{identifier}", name="showoffer")
     * @param $identifier
     */
    public function showoffer($identifier){

        $repo = $this -> getDoctrine()->getRepository(Offer::class);
        $offer = $repo -> find($identifier);

        return $this->render('offer/showoffer.html.twig', [
            'controller_name' => 'OfferController',
            'offer' => $offer
        ]);

    }
}
