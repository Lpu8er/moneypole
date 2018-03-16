<?php

namespace App\Repository;

use App\Entity\BuildingWallet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method BuildingWallet|null find($id, $lockMode = null, $lockVersion = null)
 * @method BuildingWallet|null findOneBy(array $criteria, array $orderBy = null)
 * @method BuildingWallet[]    findAll()
 * @method BuildingWallet[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BuildingWalletRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, BuildingWallet::class);
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
