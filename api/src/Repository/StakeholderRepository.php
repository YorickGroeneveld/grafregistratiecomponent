<?php

namespace App\Repository;

use App\Entity\Stakeholder;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Stakeholder|null find($id, $lockMode = null, $lockVersion = null)
 * @method Stakeholder|null findOneBy(array $criteria, array $orderBy = null)
 * @method Stakeholder[]    findAll()
 * @method Stakeholder[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StakeholderRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Stakeholder::class);
    }

    // /**
    //  * @return Stakeholder[] Returns an array of Stakeholder objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Stakeholder
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
