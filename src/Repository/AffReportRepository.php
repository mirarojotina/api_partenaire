<?php

namespace App\Repository;

use App\Entity\AffReport;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AffReport|null find($id, $lockMode = null, $lockVersion = null)
 * @method AffReport|null findOneBy(array $criteria, array $orderBy = null)
 * @method AffReport[]    findAll()
 * @method AffReport[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AffReportRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AffReport::class);
    }

    // /**
    //  * @return AffReport[] Returns an array of AffReport objects
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
    public function findOneBySomeField($value): ?AffReport
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
