<?php

namespace App\Controller;

use App\Classes\Search;
use App\Entity\Product;
use App\Form\SearchType;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager){

        $this->entityManager = $entityManager;
    }
    
    /**
     * @Route("/produits", name="products")
     */
    public function index(Request $request, ProductRepository $repository): Response
    {

        // $products = $this->entityManager->getRepository(Product::class)->findAll();

        $search = new Search;
        $search->page = $request->get('page', 1);
        $form = $this->createForm(SearchType::class, $search);

        $form->handleRequest($request);
        $products = $repository->findBySearch($search);
        // if($form->isSubmitted() && $form->isValid()){
        //     $products = $this->entityManager->getRepository(Product::class)->findBySearch($search);
        // }

        return $this->render('product/products.html.twig', [
            'products' => $products,
            'formProduct' => $form->createView()
        ]);
    }

    /**
     * @Route("/produits/{slug}", name="product")
     */
    public function show($slug): Response
    {

        $product = $this->entityManager->getRepository(Product::class)->findOneBySlug($slug);

        if(!$product){
            return $this->redirectToRoute('products');
        }

        return $this->render('product/show.html.twig', [
            'product' => $product
        ]);
    }
}
