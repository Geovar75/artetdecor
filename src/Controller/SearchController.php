<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use ACSEO\TypesenseBundle\Finder\TypesenseQuery;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SearchController extends AbstractController
{
    private $dataFinder;

    public function __construct($dataFinder)
    {
        $this->dataFinder = $dataFinder;
    }

    #[Route('/search', name: 'app_search')]
    public function index(): Response
    {
        $query = new TypesenseQuery('lasure', 'subtitles');
        $results = $this->dataFinder->query($query)->getResults();

        return $this->render('search/index.html.twig', [
            'results' => $results
        ]);
    }
}
