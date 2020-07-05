<?php

namespace App\Controller;

use App\Entity\Image;
use App\Form\ImageType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Accueil;
use App\Form\AccueilType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

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
        $scandir = array_diff(scandir("./../public/uploads/photoBanner"), array('..', '.', '.DS_Store'));
        
        $accueil = $this->getDoctrine()->getRepository(Accueil::class)->find(1);

        return $this->render('accueil.html.twig', [
            'accueil' => $accueil,
            'banners' => $scandir
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
     * @Route("/imageBanner/new", name="image_banner_new")
     */
    public function new(Request $request, SluggerInterface $slugger)
    {
        $image = new Image();
        $form = $this->createForm(ImageType::class, $image);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $photoFile = $form->get('photo')->getData();


            if ($photoFile) {
                $originalFilename = pathinfo($photoFile->getClientOriginalName(), PATHINFO_FILENAME);

                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$photoFile->guessExtension();

                try {
                    $photoFile->move(
                        $this->getParameter('photo_banner_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    echo("Probleme");
                }

                $image->setName($newFilename);
            }


            return $this->redirect($this->generateUrl('album'));
        }

            return $this->render('image/newImage.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}