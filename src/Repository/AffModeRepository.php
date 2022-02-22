<?php

namespace App\Repository;

use App\Entity\AffMode;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AffMode|null find($id, $lockMode = null, $lockVersion = null)
 * @method AffMode|null findOneBy(array $criteria, array $orderBy = null)
 * @method AffMode[]    findAll()
 * @method AffMode[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AffModeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AffMode::class);
    }

    // /**
    //  * @return AffMode[] Returns an array of AffMode objects
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
    public function findOneBySomeField($value): ?AffMode
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
