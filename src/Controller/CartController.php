<?php

namespace App\Controller;

use App\Classes\Cart;
use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CartController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager){

        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/mon-panier", name="cart")
     */
    public function index(Cart $cart): Response
    {

        return $this->render('cart/cart.html.twig', [
            'cart' => $cart->getFullCart(),
            'total' => $cart->getTotalOfCart()
        ]);
    }

    /**
     * @Route("/cart/add/{id}", name="cart_add")
     */
    public function add(Cart $cart, $id): Response
    {

        $cart->add($id);
    
        return $this->redirectToRoute('cart');
    }

    /**
     * @Route("/cart/remove", name="cart_remove")
     */
    public function remove(Cart $cart): Response
    {

        $cart->remove();
    
        return $this->redirectToRoute('products');
    }

    /**
     * @Route("/cart/delete{id}", name="cart_delete")
     */
    public function delete(Cart $cart, $id): Response
    {

        $cart->delete($id);
    
        return $this->redirectToRoute('cart');
    }

    /**
     * @Route("/cart/decrease{id}", name="cart_decrease")
     */
    public function decrease(Cart $cart, $id): Response
    {

        $cart->decrease($id);
    
        return $this->redirectToRoute('cart');
    }
}
