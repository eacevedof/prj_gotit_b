<?php

namespace App\Repository;

use App\Entity\AppLanguages;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AppLanguages|null find($id, $lockMode = null, $lockVersion = null)
 * @method AppLanguages|null findOneBy(array $criteria, array $orderBy = null)
 * @method AppLanguages[]    findAll()
 * @method AppLanguages[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AppLanguagesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AppLanguages::class);
    }

    // /**
    //  * @return AppLanguages[] Returns an array of AppLanguages objects
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
    public function findOneBySomeField($value): ?AppLanguages
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
