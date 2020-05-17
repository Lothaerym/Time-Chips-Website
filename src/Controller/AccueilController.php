<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccueilController extends AbstractController
{
	/**
     * @Route("/")
     */
    public function accueil()
    {

    	$test = "test";

        return $this->render('accueil.html.twig', [
            'test' => $test,
        ]);
    }
}