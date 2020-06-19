<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MenuController extends AbstractController
{
	/**
     * @Route("/menus")
     */
    public function menus()
    {

    	$test = "test";

        return $this->render('listMenus.html.twig', [
            'test' => $test,
        ]);
    }
}