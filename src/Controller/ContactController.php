<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Classes\MailJet;
use App\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(Request $request): Response
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $firstname = $form['firstname']->getData();
            $lastname = $form['lastname']->getData();
            $email = $form['email']->getData();
            $message = $form['message']->getData();
            $mail = new MailJet();
            $mail->send('artetdecormb@orange.fr', 'Art et Décor', 'Demande de contact', $firstname. ' '.$lastname. ' ' .$email. ' ' .$message);
            $this->addFlash('notice', 'Merci de nous avoir contacté, notre équipe va vous répondre dans les meilleurs délais');
        }

        return $this->render('contact/contact.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
