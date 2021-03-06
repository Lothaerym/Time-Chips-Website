<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class SecurityController extends AbstractController {
    
    /*
     * admin login
     */
    
    /**
     * @Route("/login", name="login")
     */
    public function login(AuthenticationUtils $authenticationUtils){
               
        $scandir = array_diff(scandir("./../public/uploads/photoBanner"), array('..', '.', '.DS_Store'));
         
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
        
        return $this->render('admin.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
            'banners' => $scandir
        ]);
    }
}

