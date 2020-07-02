<?php

namespace App\Contact;

use App\Entity\Contact;
use Twig\Environment;

/* Mail delivery */
class MailProcess {
    
    /**
    * @var \Swift_Mailer
    */
    private $mailer;

    /**
    * @var Environment
    */
    private $renderer;

    public function __construct(\Swift_Mailer $mailer, Environment $renderer){
        $this->mailer = $mailer;
        $this->renderer = $renderer;
    }
    
    /* Construct and send a mail  */
    public function notify(Contact $contact){
        $message = (new \Swift_Message('TimeChips : Demande de contact'))
                -> setFrom($contact->getEmail())
                -> setTo('contact@TimeChips.fr')
                -> setReplyTo($contact->getEmail())
                ->setBody($this->renderer->render('contact/email.html.twig', [
                    'contact' => $contact
                ]), 'text/html'); 
        $this->mailer->send($message);
    }
}
