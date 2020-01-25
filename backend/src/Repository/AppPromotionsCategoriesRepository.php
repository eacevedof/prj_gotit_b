<?php

namespace App\Repository;

use App\Entity\AppPromotionsCategories;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AppPromotionsCategories|null find($id, $lockMode = null, $lockVersion = null)
 * @method AppPromotionsCategories|null findOneBy(array $criteria, array $orderBy = null)
 * @method AppPromotionsCategories[]    findAll()
 * @method AppPromotionsCategories[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AppPromotionsCategoriesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AppPromotionsCategories::class);
    }

    // /**
    //  * @return AppPromotionsCategories[] Returns an array of AppPromotionsCategories objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AppPromotionsCategories
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
