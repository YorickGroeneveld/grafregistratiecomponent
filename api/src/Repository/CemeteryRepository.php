<?php

namespace App\Repository;

use App\Entity\Cemetery;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Cemetery|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cemetery|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cemetery[]    findAll()
 * @method Cemetery[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CemeteryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cemetery::class);
    }

    // /**
    //  * @return Cemetery[] Returns an array of Cemetery objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Cemetery
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
