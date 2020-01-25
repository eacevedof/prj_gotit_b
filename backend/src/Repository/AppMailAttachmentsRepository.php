<?php

namespace App\Repository;

use App\Entity\AppMailAttachments;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AppMailAttachments|null find($id, $lockMode = null, $lockVersion = null)
 * @method AppMailAttachments|null findOneBy(array $criteria, array $orderBy = null)
 * @method AppMailAttachments[]    findAll()
 * @method AppMailAttachments[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AppMailAttachmentsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AppMailAttachments::class);
    }

    // /**
    //  * @return AppMailAttachments[] Returns an array of AppMailAttachments objects
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
    public function findOneBySomeField($value): ?AppMailAttachments
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
