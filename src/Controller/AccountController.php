<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Address;
use App\Form\AddressType;
use App\Form\ChangePasswordType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AccountController extends AbstractController
{

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager){

        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/mon-compte", name="account")
     */
    public function index(): Response
    {
        return $this->render('account/account.html.twig');
    }

    /**
     * @Route("/mon-compte/modifier-mot-de-passe", name="account_password")
     */
    public function changePassword(Request $request, UserPasswordEncoderInterface $encoder): Response
    {
        $user = $this->getUser();

        $form = $this->createForm(ChangePasswordType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $oldPassword = $form->get('old_password')->getData();

            if($encoder->isPasswordValid($user, $oldPassword)){
                
                $newPassword = $form->get('new_password')->getData();
                $password = $encoder->encodePassword($user, $newPassword);

                $user->setPassword($password);
                $this->entityManager->flush();
                $this->addFlash('success', 'Votre mot de passe à bien été modifié !');

            }else{
                $this->addFlash('error', 'Votre mot de passe actuel n\'est pas le bon');
            }
        }

        return $this->render('account/password.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/mon-compte/adresses", name="account_addresses")
     */
    public function address(): Response
    {
        return $this->render('account/address.html.twig');
    }

    /**
     * @Route("/mon-compte/ajouter-adresse", name="account_address_add")
     */
    public function addAdress(Request $request): Response
    {

        $address = new Address();
        $form = $this->createForm(AddressType::class, $address);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $address->setUser($this->getUser());

            $this->entityManager->persist($address);
            $this->entityManager->flush();

            $this->addFlash('success', 'Votre adresse a bien été ajouté !');
            return $this->redirectToRoute('account_addresses');
        }else{
            $this->addFlash('error', 'Votre adresse comprend une erreur !');
        }

        return $this->render('account/add_address.html.twig', [
            'form' => $form->createView()
        ]);
    }
}

