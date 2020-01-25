<?php

namespace App\Repository;

use App\Entity\AppMail;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AppMail|null find($id, $lockMode = null, $lockVersion = null)
 * @method AppMail|null findOneBy(array $criteria, array $orderBy = null)
 * @method AppMail[]    findAll()
 * @method AppMail[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AppMailRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AppMail::class);
    }

    // /**
    //  * @return AppMail[] Returns an array of AppMail objects
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
    public function findOneBySomeField($value): ?AppMail
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
