<?php

namespace App\Controller;

use App\Entity\User;
use App\Classes\MailJet;
use App\Form\RegisterType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegisterController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager){

        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/inscription", name="register")
     */
    public function index(Request $request, UserPasswordEncoderInterface $encoder): Response
    {

        $notification = null;

        $user = new User();
        $form = $this->createForm(RegisterType::class, $user);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $user = $form->getData();

            $search_email = $this->entityManager->getRepository(User::class)->findOneByEmail($user->getEmail());

            if(!$search_email){

                $password = $encoder->encodePassword($user, $user->getPassword());
                $user->setPassword($password);
    
                $this->entityManager->persist($user);
                $this->entityManager->flush();

                $mail = new MailJet();
                $content = "Bonjour ".$user->getFirstname()."<br/>Bienvenue sur votre boutique Art et Décor<br/>";
                $mail->send($user->getEmail(), $user->getFirstname(), 'Bienvenue sur Art et Décor', $content);

                $notification = 'Merci d\'avoir créé votre compte sur www.art-et-decor.com. Nous sommes heureux de vous accueillir parmi nos clients.';
            }else{

                $notification = 'L\'email que vous avez renseigné existe déjà';
            }
        }
        return $this->render('register/register.html.twig', [
            'form' => $form->createView(),
            'notification' => $notification
        ]);
    }
}
