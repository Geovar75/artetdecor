<?php

namespace App\Repository;

use App\Classes\Search;
use App\Entity\Product;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @method Product|null find($id, $lockMode = null, $lockVersion = null)
 * @method Product|null findOneBy(array $criteria, array $orderBy = null)
 * @method Product[]    findAll()
 * @method Product[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry, PaginatorInterface $paginator)
    {
        parent::__construct($registry, Product::class);
        $this->paginator = $paginator;
    }

    /**
     * @return PaginationInterface
     */
    public function findBySearch(Search $data) : PaginationInterface{

        $query = $this
        ->createQueryBuilder('p')
        ->select('c', 'p')
        ->join('p.category', 'c');

        if(!empty($data->string)){
         $query = $query
            ->andWhere('p.name LIKE :string')
            ->setParameter('string', "%{$data->string}%");
        }

        if(!empty($data->categories)){
            $query = $query
            ->andWhere('c.id IN (:categories)')
            ->setParameter('categories', $data->categories);
        }

        $query = $query->getQuery();
        return $this->paginator->paginate(
            $query,
            $data->page,
            16
        );

    }

    // /**
    //  * @return Product[]
    //  */
    // public function findBySearch(Search $search){

    //     $query = $this
    //     ->createQueryBuilder('p')
    //     ->select('c', 'p')
    //     ->join('p.category', 'c');

    //     if(!empty($search->categories)){
    //         $query = $query
    //         ->andWhere('c.id IN (:categories)')
    //         ->setParameter('categories', $search->categories);
    //     }

    //     return $query->getQuery()->getResult();
    // }

    // /**
    //  * @return Product[] Returns an array of Product objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Product
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
