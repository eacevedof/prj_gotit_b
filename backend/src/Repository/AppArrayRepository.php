<?php

namespace App\Repository;

use App\Entity\AppArray;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AppArray|null find($id, $lockMode = null, $lockVersion = null)
 * @method AppArray|null findOneBy(array $criteria, array $orderBy = null)
 * @method AppArray[]    findAll()
 * @method AppArray[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AppArrayRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AppArray::class);
    }

    // /**
    //  * @return AppArray[] Returns an array of AppArray objects
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
    public function findOneBySomeField($value): ?AppArray
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
