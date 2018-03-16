<?php

namespace App\Repository;

use App\Entity\BuildingStock;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method BuildingStock|null find($id, $lockMode = null, $lockVersion = null)
 * @method BuildingStock|null findOneBy(array $criteria, array $orderBy = null)
 * @method BuildingStock[]    findAll()
 * @method BuildingStock[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BuildingStockRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, BuildingStock::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('b')
            ->where('b.something = :value')->setParameter('value', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
