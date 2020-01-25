<?php

namespace App\Repository;

use App\Entity\AppPromotionNotifications;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AppPromotionNotifications|null find($id, $lockMode = null, $lockVersion = null)
 * @method AppPromotionNotifications|null findOneBy(array $criteria, array $orderBy = null)
 * @method AppPromotionNotifications[]    findAll()
 * @method AppPromotionNotifications[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AppPromotionNotificationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AppPromotionNotifications::class);
    }

    // /**
    //  * @return AppPromotionNotifications[] Returns an array of AppPromotionNotifications objects
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
    public function findOneBySomeField($value): ?AppPromotionNotifications
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
