<?php

namespace App\Repository;

use App\Entity\AffChannel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AffChannel|null find($id, $lockMode = null, $lockVersion = null)
 * @method AffChannel|null findOneBy(array $criteria, array $orderBy = null)
 * @method AffChannel[]    findAll()
 * @method AffChannel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AffChannelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AffChannel::class);
    }

    // /**
    //  * @return AffChannel[] Returns an array of AffChannel objects
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
    public function findOneBySomeField($value): ?AffChannel
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
