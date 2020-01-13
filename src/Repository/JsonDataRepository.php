<?php

namespace App\Repository;

use App\Entity\JsonData;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method JsonData|null find($id, $lockMode = null, $lockVersion = null)
 * @method JsonData|null findOneBy(array $criteria, array $orderBy = null)
 * @method JsonData[]    findAll()
 * @method JsonData[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JsonDataRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, JsonData::class);
    }

    // /**
    //  * @return JsonData[] Returns an array of JsonData objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('j.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?JsonData
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
