<?php

namespace App\Repository;

use App\Entity\Administratif;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Administratif>
 *
 * @method Administratif|null find($id, $lockMode = null, $lockVersion = null)
 * @method Administratif|null findOneBy(array $criteria, array $orderBy = null)
 * @method Administratif[]    findAll()
 * @method Administratif[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdministratifRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Administratif::class);
    }

//    /**
//     * @return Administratif[] Returns an array of Administratif objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Administratif
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
