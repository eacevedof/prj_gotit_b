<?php

namespace App\Repository;

use App\Entity\AppCompanyBonus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AppCompanyBonus|null find($id, $lockMode = null, $lockVersion = null)
 * @method AppCompanyBonus|null findOneBy(array $criteria, array $orderBy = null)
 * @method AppCompanyBonus[]    findAll()
 * @method AppCompanyBonus[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AppCompanyBonusRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AppCompanyBonus::class);
    }

    // /**
    //  * @return AppCompanyBonus[] Returns an array of AppCompanyBonus objects
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
    public function findOneBySomeField($value): ?AppCompanyBonus
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
