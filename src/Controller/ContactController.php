<?php

namespace App\Controller;


use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Contact;
use App\Contact\MailProcess;
use App\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ContactController extends AbstractController
{
    
    /*
     * Contact form
     */
    
    /**
     * @Route("/contact", name="contact")
     */
    public function contact(Request $request, MailProcess $mail): Response
    {
        $scandir = array_diff(scandir("./../public/uploads/photoBanner"), array('..', '.', '.DS_Store'));
         
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $mail->notify($contact);
            $this->addFlash('success', 'Votre mail a bien été envoyé');

            return $this->redirectToRoute('accueil');
        }
        
        return $this->render('contact/contact.html.twig', [
            'form' => $form->createView(),
            'banners' => $scandir
        ]);
    }
}