<?php

namespace App\Controller;

use App\Entity\User;
use App\Classes\MailJet;
use App\Entity\ResetPassword;
use App\Form\ResetPasswordType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class ResetPasswordController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager){

        $this->entityManager = $entityManager;
    }
    
    /**
     * @Route("/reinitialisation-mot-de-passe", name="reset_password")
     */
    public function index(Request $request): Response
    {

        if($this->getUser()){
            return $this->redirectToRoute('home');
        }

        if($request->get('email')){
            $user = $this->entityManager->getRepository(User::class)->findOneByEmail($request->get('email'));
        

            if($user){
                $reset_password = new ResetPassword();
                $reset_password->setUser($user);
                $reset_password->setToken(uniqId());
                $reset_password->setCreatedAt(new \DateTime());
                $this->entityManager->persist($reset_password);
                $this->entityManager->flush();

                $url = $this->generateUrl('update_password', [
                    'token' => $reset_password->getToken()
                ]);

                $content = "Bonjour ".$user->getFirstname(). "<br>Vous avez demandé à réinitialiser votre mot de passe sur Art et Décor.<br>";
                $content .= "Merci de bien vouloir cliquer sur le lien suivant pour <a href='".$url."'>mettre à jour votre mot de passe</a>.";

                $mail = new MailJet();
                $mail->send($user->getEmail(), $user->getFirstname(). ' '.$user->getLastname(), 'Réinitialiser votre mot de passe sur Art et Décor', $content);
                $this->addFlash('notice', 'Vous allez recevoir un email afin de réinitialiser votre mot de passe');
            }else{
                $this->addFlash('notice', 'Cette adresse email n\'existe pas');
            }
        }

        return $this->render('reset_password/reset_password.html.twig');
    }

    /**
     * @Route("/modifier-mot-de-passe/{token}", name="update_password")
     */
     public function update(Request $request, $token, UserPasswordEncoderInterface $encoder){

        $reset_password = $this->entityManager->getRepository(ResetPassword::class)->findOneByToken($token);

        if(!$reset_password){
            return $this->redirectToRoute('reset_password');
        }

        $now = new \DateTime();
        if($now > $reset_password->getCreatedAt()->modify('+ 3 hour')){

            $this->addFlash('notice', 'Votre demande de mot de passe a expiré, merci de la renouveler');
            return $this->redirectToRoute('reset_password');
        }

        $form = $this->createForm(ResetPasswordType::class);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $new_password = $form->get('new_password')->getData();

            $password = $encoder->encodePassword($reset_password->getUser(), $new_password);
            $reset_password->getUser()->setPassword($password);
            $this->entityManager->flush();
            $this->addFlash('notice', 'Votre mot de passe a bien été modifié');

            return $this->redirectToRoute('app_login');
        }

        return $this->render('reset_password/update_password.html.twig', [
            'form' => $form->createView()
        ]);
     }
}
