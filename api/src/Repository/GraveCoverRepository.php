<?php

namespace App\Repository;

use App\Entity\GraveCover;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method GraveCover|null find($id, $lockMode = null, $lockVersion = null)
 * @method GraveCover|null findOneBy(array $criteria, array $orderBy = null)
 * @method GraveCover[]    findAll()
 * @method GraveCover[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GraveCoverRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GraveCover::class);
    }

    // /**
    //  * @return GraveCover[] Returns an array of GraveCover objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GraveCover
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
