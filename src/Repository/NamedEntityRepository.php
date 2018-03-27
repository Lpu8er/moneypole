<?php

namespace App\Repository;

use App\Entity\NamedEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method NamedEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method NamedEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method NamedEntity[]    findAll()
 * @method NamedEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NamedEntityRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, NamedEntity::class);
    }
    
}
