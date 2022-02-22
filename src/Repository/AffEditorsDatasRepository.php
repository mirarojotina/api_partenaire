<?php

namespace App\Repository;

use App\Entity\AffEditorsDatas;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AffEditorsDatas|null find($id, $lockMode = null, $lockVersion = null)
 * @method AffEditorsDatas|null findOneBy(array $criteria, array $orderBy = null)
 * @method AffEditorsDatas[]    findAll()
 * @method AffEditorsDatas[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AffEditorsDatasRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AffEditorsDatas::class);
    }

    // /**
    //  * @return AffEditorsDatas[] Returns an array of AffEditorsDatas objects
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
    public function findOneBySomeField($value): ?AffEditorsDatas
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
