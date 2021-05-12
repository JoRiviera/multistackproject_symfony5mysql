<?php

namespace App\Repository;

use App\Entity\PickUpPlace;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PickUpPlace|null find($id, $lockMode = null, $lockVersion = null)
 * @method PickUpPlace|null findOneBy(array $criteria, array $orderBy = null)
 * @method PickUpPlace[]    findAll()
 * @method PickUpPlace[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PickUpPlaceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PickUpPlace::class);
    }

    // /**
    //  * @return PickUpPlace[] Returns an array of PickUpPlace objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PickUpPlace
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
