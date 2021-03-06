<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Information;
use App\Form\InformationType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class InfosPratController extends AbstractController
{
    /*
     * show various informations about restaurant
     */
    
    /**
     * @Route("/infos", name="informations")
     */
    public function infos()
    {
        $scandir = array_diff(scandir("./../public/uploads/photoBanner"), array('..', '.', '.DS_Store'));
         
        $infos = $this->getDoctrine()->getRepository(Information::class)->find(1);

        return $this->render('infosPrat.html.twig', [
            'infos' => $infos,
            'banners' => $scandir
        ]);
    }
 
    
    /*
     * edit information
     */
    
   /**
     * @Route("/{id}/editInfo", name="information_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Information $information): Response
    {
        $form = $this->createForm(InformationType::class, $information);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('informations');
        }

        return $this->render('information/edit.html.twig', [
            'information' => $information,
            'form' => $form->createView(),
        ]);
    }
}