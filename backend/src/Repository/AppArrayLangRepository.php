<?php

namespace App\Repository;

use App\Entity\AppArrayLang;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AppArrayLang|null find($id, $lockMode = null, $lockVersion = null)
 * @method AppArrayLang|null findOneBy(array $criteria, array $orderBy = null)
 * @method AppArrayLang[]    findAll()
 * @method AppArrayLang[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AppArrayLangRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AppArrayLang::class);
    }

    // /**
    //  * @return AppArrayLang[] Returns an array of AppArrayLang objects
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
    public function findOneBySomeField($value): ?AppArrayLang
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
