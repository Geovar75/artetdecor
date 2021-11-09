<?php

namespace App\Controller;

use App\Classes\Cart;
use App\Entity\Order;
use App\Form\OrderType;
use App\Classes\MailJet;
use App\Entity\OrderDetails;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class OrderController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager){

        $this->entityManager = $entityManager;
    }
    
    /**
     * @Route("/commande", name="order")
     */
    public function index(Cart $cart, Request $request): Response
    {

        if(!$this->getUser()->getAddresses()->getValues()){
            return $this->redirectToRoute('account_address_add');
        }

        $form = $this->createForm(OrderType::class, null, [
            'user' => $this->getUser()
        ]);

        return $this->render('order/order.html.twig', [
            'form' => $form->createView(),
            'cart' => $cart->getFullCart()
        ]);
    }
    
    /**
     * @Route("/commande/recapitulatif", name="order_recap", methods={"POST", "GET"})
     */
    public function add(Cart $cart, Request $request): Response
    {

        $form = $this->createForm(OrderType::class, null, [
            'user' => $this->getUser()
        ]);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $date = new \DateTime();
            $carriers = $form->get('carriers')->getData();
            $delivery = $form->get('addresses')->getData();
            $delivery_content = $delivery->getFirstname(). ' '.$delivery->getLastname();
            $delivery_content .= '<br>'.$delivery->getPhone();

            if($delivery->getCompany()){
                $delivery_content .= '<br>'.$delivery->getCompany();
            }

            $delivery_content .= '<br>'.$delivery->getAddress();
            $delivery_content .= '<br>'.$delivery->getPostalCode().' '.$delivery->getCity();
            $delivery_content .= '<br>'.$delivery->getCountry();
    
            
            $order = new Order();
            $reference = 'CC'.'-'.uniqid();
            $order->setReference($reference);
            $order->setUser($this->getUser());
            $order->setCreatedAt($date);
            $order->setCarrierName($carriers->getName());
            $order->setCarrierPrice($carriers->getPrice());
            $order->setDelivery($delivery_content);
            $order->setState(0);

            $this->entityManager->persist($order);

            foreach($cart->getFullCart() as $product){
                $orderDetails = new OrderDetails();
                $orderDetails->setMyorder($order);
                $orderDetails->setProduct($product['product']->getName());
                $orderDetails->setQuantity($product['quantity']);
                $orderDetails->setPrice($product['product']->getPrice());
                $orderDetails->setTotal($product['product']->getPrice() * $product['quantity']);
                $this->entityManager->persist($orderDetails);
            }

            $this->entityManager->flush();

            return $this->render('order/add.html.twig', [
                'cart' => $cart->getFullCart(),
                'form' => $form->createView(),
                'total' => $cart->getTotalOfCart(),
                'carrier' => $carriers,
                'reference' => $order->getReference()
            ]);
        }

        return $this->redirectToRoute('cart');
    }

    /**
     * @Route("/commande/merci/{stripeSessionId}", name="order_validate")
     */
    public function commandValided($stripeSessionId, Cart $cart){

        $order = $this->entityManager->getRepository(Order::class)->findOneByStripeSessionId($stripeSessionId);

        if(!$order || $order->getUser() != $this->getUser()){

            return $this->redirectToRoute('home');
        }

        if($order->getState() == 0){

            $cart->remove();
            $order->setState(1);
            $this->entityManager->flush();

            $mail = new MailJet();
            $content = "Bonjour ".$order->getUser()->getFirstname()."<br/>Merci pour votre commande<br/>";
            $mail->send($order->getUser()->getEmail(), $order->getUser()->getFirstname(), 'Commande validée sur Art et Décor', $content);

        }

        return $this->render('order/valid.html.twig', [
            'order' => $order
        ]);
    }

    /**
     * @Route("/commande/erreur/{stripeSessionId}", name="order_cancel")
     */
    public function commandCanceled($stripeSessionId){

        $order = $this->entityManager->getRepository(Order::class)->findOneByStripeSessionId($stripeSessionId);

        if(!$order || $order->getUser() != $this->getUser()){

            return $this->redirectToRoute('home');
        }

        return $this->render('order/cancel.html.twig', [
            'order' => $order
        ]);
    }
}
