<?php

namespace App\Repository;

use App\Entity\AffField;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AffField|null find($id, $lockMode = null, $lockVersion = null)
 * @method AffField|null findOneBy(array $criteria, array $orderBy = null)
 * @method AffField[]    findAll()
 * @method AffField[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AffFieldRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AffField::class);
    }

    // /**
    //  * @return AffField[] Returns an array of AffField objects
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
    public function findOneBySomeField($value): ?AffField
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
