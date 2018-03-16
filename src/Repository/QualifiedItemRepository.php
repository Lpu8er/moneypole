<?php

namespace App\Repository;

use App\Entity\QualifiedItem;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method QualifiedItem|null find($id, $lockMode = null, $lockVersion = null)
 * @method QualifiedItem|null findOneBy(array $criteria, array $orderBy = null)
 * @method QualifiedItem[]    findAll()
 * @method QualifiedItem[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QualifiedItemRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, QualifiedItem::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('q')
            ->where('q.something = :value')->setParameter('value', $value)
            ->orderBy('q.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
