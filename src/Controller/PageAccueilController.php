<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Accueil;
use App\Form\AccueilType;
use Symfony\Component\HttpFoundation\Request;


class PageAccueilController extends AbstractController
{
    /*
     * show the restaurant presentation
     */
    
    /**
     * @Route("/", name="accueil")
     */
    public function accueil()
    {
        $accueil = $this->getDoctrine()->getRepository(Accueil::class)->find(1);

        return $this->render('accueil.html.twig', [
            'accueil' => $accueil
        ]);
    }
    
    /*
     * edit the presentation
     */
    
    /**
     * @Route("/{id}/editAccueil", name="accueil_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Accueil $accueil): Response
    {
        $form = $this->createForm(AccueilType::class, $accueil);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('accueil');
        }

        return $this->render('accueilForm/edit.html.twig', [
            'accueil' => $accueil,
            'form' => $form->createView(),
        ]);
    }

        /**
     * @Route("/genAccueil")
     */
    // public function genAccueil()
    // {
    //     $entityManager = $this->getDoctrine()->getManager();

    //     $accueil = new Accueil();
    //     $accueil->setContent("aaaa");
    //     $accueil->setFacebookUrl("aaa");
    //     $accueil->setMapUrl("aaa");

    //     $entityManager->persist($accueil);
    //     $entityManager->flush();
        

    //     return new Response('test'.$accueil->getId());
    // }
}