<?php

namespace App\Repository;

use App\Entity\Ocurrence;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Ocurrence|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ocurrence|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ocurrence[]    findAll()
 * @method Ocurrence[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OcurrenceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ocurrence::class);
    }



    // /**
    //  * @return Ocurrence[] Returns an array of Ocurrence objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Ocurrence
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
