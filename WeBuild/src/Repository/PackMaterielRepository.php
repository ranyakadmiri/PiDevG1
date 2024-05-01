<?php

namespace App\Repository;

use App\Entity\PackMateriel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PackMateriel>
 *
 * @method PackMateriel|null find($id, $lockMode = null, $lockVersion = null)
 * @method PackMateriel|null findOneBy(array $criteria, array $orderBy = null)
 * @method PackMateriel[]    findAll()
 * @method PackMateriel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PackMaterielRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PackMateriel::class);
    }

    
//    /**
//     * @return PackMateriel[] Returns an array of PackMateriel objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?PackMateriel
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
