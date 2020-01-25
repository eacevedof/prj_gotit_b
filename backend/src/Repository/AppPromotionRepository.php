<?php

namespace App\Repository;

use App\Entity\AppPromotion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AppPromotion|null find($id, $lockMode = null, $lockVersion = null)
 * @method AppPromotion|null findOneBy(array $criteria, array $orderBy = null)
 * @method AppPromotion[]    findAll()
 * @method AppPromotion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AppPromotionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AppPromotion::class);
    }

    // /**
    //  * @return AppPromotion[] Returns an array of AppPromotion objects
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
    public function findOneBySomeField($value): ?AppPromotion
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
