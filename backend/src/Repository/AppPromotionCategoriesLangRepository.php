<?php

namespace App\Repository;

use App\Entity\AppPromotionCategoriesLang;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AppPromotionCategoriesLang|null find($id, $lockMode = null, $lockVersion = null)
 * @method AppPromotionCategoriesLang|null findOneBy(array $criteria, array $orderBy = null)
 * @method AppPromotionCategoriesLang[]    findAll()
 * @method AppPromotionCategoriesLang[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AppPromotionCategoriesLangRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AppPromotionCategoriesLang::class);
    }

    // /**
    //  * @return AppPromotionCategoriesLang[] Returns an array of AppPromotionCategoriesLang objects
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
    public function findOneBySomeField($value): ?AppPromotionCategoriesLang
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
