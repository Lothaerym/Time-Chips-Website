<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Accueil;
use App\Form\AccueilType;
use Symfony\Component\HttpFoundation\Request;


class AvisController extends AbstractController
{
    
    /*
     * reviews of Google my business
     */
    
    /**
     * @Route("/avis", name="avis")
     */
    public function avis()
    {

        return $this->render('avis.html.twig', [

        ]);
    }
}