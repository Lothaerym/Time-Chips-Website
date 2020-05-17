<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class InfosPratController extends AbstractController
{
	/**
     * @Route("/infos")
     */
    public function infos()
    {

        return $this->render('infosPrat.html.twig', [
        ]);
    }
}