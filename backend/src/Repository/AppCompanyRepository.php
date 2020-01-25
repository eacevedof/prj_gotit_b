<?php

namespace App\Repository;

use App\Entity\AppCompany;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AppCompany|null find($id, $lockMode = null, $lockVersion = null)
 * @method AppCompany|null findOneBy(array $criteria, array $orderBy = null)
 * @method AppCompany[]    findAll()
 * @method AppCompany[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AppCompanyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AppCompany::class);
    }

    // /**
    //  * @return AppCompany[] Returns an array of AppCompany objects
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
    public function findOneBySomeField($value): ?AppCompany
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
