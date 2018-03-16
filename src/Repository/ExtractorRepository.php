<?php

namespace App\Repository;

use App\Entity\Extractor;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Extractor|null find($id, $lockMode = null, $lockVersion = null)
 * @method Extractor|null findOneBy(array $criteria, array $orderBy = null)
 * @method Extractor[]    findAll()
 * @method Extractor[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExtractorRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Extractor::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('e')
            ->where('e.something = :value')->setParameter('value', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
