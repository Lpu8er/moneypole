<?php

namespace App\Repository;

use App\Entity\CityStock;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CityStock|null find($id, $lockMode = null, $lockVersion = null)
 * @method CityStock|null findOneBy(array $criteria, array $orderBy = null)
 * @method CityStock[]    findAll()
 * @method CityStock[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CityStockRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CityStock::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('c')
            ->where('c.something = :value')->setParameter('value', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
