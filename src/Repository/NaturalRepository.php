<?php

namespace App\Repository;

use App\Entity\Natural;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Natural|null find($id, $lockMode = null, $lockVersion = null)
 * @method Natural|null findOneBy(array $criteria, array $orderBy = null)
 * @method Natural[]    findAll()
 * @method Natural[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NaturalRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Natural::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('n')
            ->where('n.something = :value')->setParameter('value', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
