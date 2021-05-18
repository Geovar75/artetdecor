<?php

namespace App\Classes;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class Cart{

    protected $session;
    protected $entityManager;

    public function __construct(SessionInterface $session, EntityManagerInterface $entityManager){

        $this->session = $session;
        $this->entityManager = $entityManager;
    }

    public function add(int $id){

        $cart = $this->session->get('cart', []);

        if(!empty($cart[$id])){
            $cart[$id]++;
        }else{
            $cart[$id] = 1;
        }

        $this->session->set('cart', $cart);
    }

    public function get(){

        return $this->session->get('cart');
    }

    public function remove(){
        
        return $this->session->remove('cart');
    }

    public function delete(int $id){
        
        $cart = $this->session->get('cart', []);

        unset($cart[$id]);

        return $this->session->set('cart', $cart);
    }

    public function decrease(int $id){

        $cart = $this->session->get('cart', []);

        if($cart[$id] > 1){
            $cart[$id]--;
        }else{
            unset($cart[$id]);
        }

        return $this->session->set('cart', $cart);
    }

    public function getFullCart(){

        $cartComplete = [];

        if($this->get()){

            foreach ($this->get() as $id => $quantity){
                $productItem = $this->entityManager->getRepository(Product::class)->findOneById($id);

                if(!$productItem){

                    $this->delete($id);
                    continue;
                }

                $cartComplete[] = [
                    'product' => $productItem,
                    'quantity' => $quantity
                ];
            }

            return $cartComplete;
        }
    }

    public function getTotalOfCart() : float{

        //Récupérer le prix total du panier
        $total = 0;

            if($this->get()){
                
            foreach($this->getFullCart() as $product){
                $total += $product['product']->getPrice() * $product['quantity'];
            }
        }
        return $total;
    }
}