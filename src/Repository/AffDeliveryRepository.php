<?php

namespace App\Repository;

use App\Entity\AffDelivery;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AffDelivery|null find($id, $lockMode = null, $lockVersion = null)
 * @method AffDelivery|null findOneBy(array $criteria, array $orderBy = null)
 * @method AffDelivery[]    findAll()
 * @method AffDelivery[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AffDeliveryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AffDelivery::class);
    }

    // /**
    //  * @return AffDelivery[] Returns an array of AffDelivery objects
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
    public function findOneBySomeField($value): ?AffDelivery
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
