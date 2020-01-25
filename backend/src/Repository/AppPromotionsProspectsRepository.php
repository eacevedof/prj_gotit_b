<?php

namespace App\Repository;

use App\Entity\AppPromotionsProspects;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AppPromotionsProspects|null find($id, $lockMode = null, $lockVersion = null)
 * @method AppPromotionsProspects|null findOneBy(array $criteria, array $orderBy = null)
 * @method AppPromotionsProspects[]    findAll()
 * @method AppPromotionsProspects[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AppPromotionsProspectsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AppPromotionsProspects::class);
    }

    // /**
    //  * @return AppPromotionsProspects[] Returns an array of AppPromotionsProspects objects
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
    public function findOneBySomeField($value): ?AppPromotionsProspects
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
