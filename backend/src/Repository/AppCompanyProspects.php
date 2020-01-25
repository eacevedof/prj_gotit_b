<?php

namespace App\Repository;

use App\Entity\AppCompanyProspects;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AppCompanyProspects|null find($id, $lockMode = null, $lockVersion = null)
 * @method AppCompanyProspects|null findOneBy(array $criteria, array $orderBy = null)
 * @method AppCompanyProspects[]    findAll()
 * @method AppCompanyProspects[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AppCompanyProspects extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AppCompanyProspects::class);
    }

    // /**
    //  * @return AppCompanyProspects[] Returns an array of AppCompanyProspects objects
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
    public function findOneBySomeField($value): ?AppCompanyProspects
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
