<?php

namespace App\Repository;

use App\Entity\Wallet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

use App\Entity\NamedEntity;
use App\Entity\Currency;

/**
 * @method Wallet|null find($id, $lockMode = null, $lockVersion = null)
 * @method Wallet|null findOneBy(array $criteria, array $orderBy = null)
 * @method Wallet[]    findAll()
 * @method Wallet[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WalletRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Wallet::class);
    }
    
    /**
     * 
     * @param NamedEntity $entity
     * @param Currency $currency
     * @return Wallet
     */
    public function retrieveOrCreate(NamedEntity $entity, Currency $currency) {
        $returns = $this->retrieve($entity, $currency);
        if(empty($returns)) {
            $returns = new Wallet;
            $returns->setAmount(0.);
            $returns->setCurrency($currency);
            $returns->setNamedEntity($entity);
            $this->getEntityManager()->persist($returns);
            $this->getEntityManager()->flush();
        }
        return $returns;
    }
    
    /**
     * 
     * @param NamedEntity $entity
     * @param Currency $currency
     * @return Wallet
     */
    public function retrieve(NamedEntity $entity, Currency $currency) {
        $returns = null;
        try {
            $returns = $this->getEntityManager()->getRepository(\App\Entity\Wallet::class)->findOneBy(['namedEntity' => $source->getId(), 'currency' => $currency->getId(),]);
        } catch (\Exception $e){}
        return $returns;
    }
}
