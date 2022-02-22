<?php

namespace App\Repository;

use App\Entity\AffPartner;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AffPartner|null find($id, $lockMode = null, $lockVersion = null)
 * @method AffPartner|null findOneBy(array $criteria, array $orderBy = null)
 * @method AffPartner[]    findAll()
 * @method AffPartner[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AffPartnerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AffPartner::class);
    }

    // /**
    //  * @return AffPartner[] Returns an array of AffPartner objects
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
    public function findOneBySomeField($value): ?AffPartner
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
