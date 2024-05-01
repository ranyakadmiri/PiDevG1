<?php

namespace App\Repository;

use App\Entity\Offre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Offre>
 *
 * @method Offre|null find($id, $lockMode = null, $lockVersion = null)
 * @method Offre|null findOneBy(array $criteria, array $orderBy = null)
 * @method Offre[]    findAll()
 * @method Offre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OffreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Offre::class);
    }

    public function findByTitle(string $title)
    {
        return $this->createQueryBuilder('o')
            ->where('o.title LIKE :title')
            ->setParameter('title', '%' . $title . '%')
            ->getQuery()
            ->getResult();
    }
public function findBySalaryRange($minSalary, $maxSalary)
{
    $qb = $this->createQueryBuilder('o');

    if ($minSalary !== null) {
        $qb->andWhere('o.salary >= :minSalary')
           ->setParameter('minSalary', $minSalary);
    }

    if ($maxSalary !== null) {
        $qb->andWhere('o.salary <= :maxSalary')
           ->setParameter('maxSalary', $maxSalary);
    }

    return $qb->getQuery()->getResult();
}

public function findByMinSalary($minSalary)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.salary >= :minSalary')
            ->setParameter('minSalary', $minSalary)
            ->getQuery()
            ->getResult();
    }

    // Méthode pour récupérer les offres avec un salaire inférieur ou égal à maxSalary
    public function findByMaxSalary($maxSalary)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.salary <= :maxSalary')
            ->setParameter('maxSalary', $maxSalary)
            ->getQuery()
            ->getResult();
    }
}
