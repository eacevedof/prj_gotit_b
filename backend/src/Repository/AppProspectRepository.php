<?php

namespace App\Repository;

use App\Entity\AppProspect;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AppProspect|null find($id, $lockMode = null, $lockVersion = null)
 * @method AppProspect|null findOneBy(array $criteria, array $orderBy = null)
 * @method AppProspect[]    findAll()
 * @method AppProspect[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AppProspectRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AppProspect::class);
    }

    // /**
    //  * @return AppProspect[] Returns an array of AppProspect objects
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
    public function findOneBySomeField($value): ?AppProspect
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
