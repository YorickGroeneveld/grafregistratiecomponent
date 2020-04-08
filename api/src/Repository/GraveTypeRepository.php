<?php

namespace App\Repository;

use App\Entity\GraveType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method GraveType|null find($id, $lockMode = null, $lockVersion = null)
 * @method GraveType|null findOneBy(array $criteria, array $orderBy = null)
 * @method GraveType[]    findAll()
 * @method GraveType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GraveTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GraveType::class);
    }

    // /**
    //  * @return GraveType[] Returns an array of GraveType objects
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
    public function findOneBySomeField($value): ?GraveType
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
