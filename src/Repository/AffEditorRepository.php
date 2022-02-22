<?php

namespace App\Repository;

use App\Entity\AffEditor;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AffEditor|null find($id, $lockMode = null, $lockVersion = null)
 * @method AffEditor|null findOneBy(array $criteria, array $orderBy = null)
 * @method AffEditor[]    findAll()
 * @method AffEditor[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AffEditorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AffEditor::class);
    }

    // /**
    //  * @return AffEditor[] Returns an array of AffEditor objects
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
    public function findOneBySomeField($value): ?AffEditor
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
