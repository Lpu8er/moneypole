<?php

namespace App\Repository;

use App\Entity\NamedEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

use App\Entity\NamedEntity;
use App\Entity\Currency;
use App\Entity\Wallet;

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
    
    /**
     * 
     * @param NamedEntity $source
     * @param NamedEntity $target
     * @param Currency $currency
     * @param float $amount
     * @param string $reason
     * @return bool|null
     */
    public function moveMoney(NamedEntity $source, NamedEntity $target, Currency $currency, float $amount, string $reason = '') {
        $returns = null;
        if(0 < $amount) {
            // first of all, check wallets. Create if not exists.
            $srcWallet = $this->getEntityManager()->getRepository(Wallet::class)->retrieveOrCreate($source, $currency);
            if($amount <= $srcWallet->getAmount()) {
                $trgWallet = $this->getEntityManager()->getRepository(Wallet::class)->retrieveOrCreate($target, $currency);
                $srcWallet->setAmount($srcWallet->getAmount() - $amount);
                $this->getEntityManager()->persist($srcWallet);
                $trgWallet->setAmount($trgWallet->getAmount() + $amount);
                $this->getEntityManager()->persist($trgWallet);
                $this->getEntityManager()->flush(); // force now
                // create both history
                $trgWalletHistory = new \App\Entity\WalletHistory();
                $trgWalletHistory->setCurrency($currency);
                $trgWalletHistory->setEntity($target);
                $trgWalletHistory->setDateHistory(new \DateTime());
                $trgWalletHistory->setVal($amount);
                $trgWalletHistory->setDetails($reason);
                $srcWalletHistory = clone $trgWalletHistory;
                $srcWalletHistory->setEntity($source);
                $srcWalletHistory->setVal(-1 * $amount);
                $this->getEntityManager()->persist($trgWalletHistory);
                $this->getEntityManager()->persist($srcWalletHistory);
                $this->getEntityManager()->flush(); // force now
                $returns = true;
            } else {
                $returns = false;
            }
        }
        return $returns;
    }
}
