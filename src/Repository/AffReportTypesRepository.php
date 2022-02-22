<?php

namespace App\Repository;

use App\Entity\AffReportTypes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AffReportTypes|null find($id, $lockMode = null, $lockVersion = null)
 * @method AffReportTypes|null findOneBy(array $criteria, array $orderBy = null)
 * @method AffReportTypes[]    findAll()
 * @method AffReportTypes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AffReportTypesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AffReportTypes::class);
    }

    // /**
    //  * @return AffReportTypes[] Returns an array of AffReportTypes objects
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
    public function findOneBySomeField($value): ?AffReportTypes
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
