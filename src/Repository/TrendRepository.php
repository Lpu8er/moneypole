<?php

namespace App\Repository;

use App\Entity\Trend;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Trend|null find($id, $lockMode = null, $lockVersion = null)
 * @method Trend|null findOneBy(array $criteria, array $orderBy = null)
 * @method Trend[]    findAll()
 * @method Trend[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrendRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Trend::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('t')
            ->where('t.something = :value')->setParameter('value', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
