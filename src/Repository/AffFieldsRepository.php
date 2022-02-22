<?php

namespace App\Repository;

use App\Entity\AffFields;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AffFields|null find($id, $lockMode = null, $lockVersion = null)
 * @method AffFields|null findOneBy(array $criteria, array $orderBy = null)
 * @method AffFields[]    findAll()
 * @method AffFields[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AffFieldsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AffFields::class);
    }

    // /**
    //  * @return AffFields[] Returns an array of AffFields objects
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
    public function findOneBySomeField($value): ?AffFields
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