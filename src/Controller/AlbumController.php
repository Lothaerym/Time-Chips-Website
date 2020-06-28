<?php

namespace App\Controller;

use App\Entity\Image;
use App\Form\ImageType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

class AlbumController extends AbstractController
{
    
    /*
     * Photos album
     */
    
    /**
     * @Route("/album", name="album")
     */
    public function index()
    {
        // Files list (photos)
        $scandir = scandir("./../public/uploads/photo");

        return $this->render('album/index.html.twig', [
            'photos' => $scandir,
        ]);
    }
    
    
    /**
     * @Route("/image/new", name="image_new")
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
                        $this->getParameter('photo_directory'),
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
