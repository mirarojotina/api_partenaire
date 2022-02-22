<?php

namespace App\Repository;

use App\Entity\AffInternalRepport;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AffInternalRepport|null find($id, $lockMode = null, $lockVersion = null)
 * @method AffInternalRepport|null findOneBy(array $criteria, array $orderBy = null)
 * @method AffInternalRepport[]    findAll()
 * @method AffInternalRepport[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AffInternalRepportRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AffInternalRepport::class);
    }

    // /**
    //  * @return AffInternalRepport[] Returns an array of AffInternalRepport objects
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
    public function findOneBySomeField($value): ?AffInternalRepport
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
