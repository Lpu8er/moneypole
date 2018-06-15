<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\WalletRepository")
 * @ORM\Table(name="wallets")
 */
class Wallet extends AbstractEntity
{
    /**
     *
     * @var type 
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="NamedEntity")
     * @ORM\JoinColumn(name="namedentity_id", referencedColumnName="id")
     */
    protected $namedEntity;
    /**
     *
     * @var type 
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Currency")
     * @ORM\JoinColumn(name="currency_id", referencedColumnName="id")
     */
    protected $currency;
    
    /**
     *
     * @ORM\Column(name="amount", type="decimal", precision=12, scale=5)
     * @var float
     */
    protected $amount = 0.00;
    
    public function getNamedEntity(): NamedEntity {
        return $this->namedEntity;
    }

    public function getCurrency(): Currency {
        return $this->currency;
    }

    public function getAmount() {
        return $this->amount;
    }

    public function setNamedEntity(NamedEntity $namedEntity) {
        $this->namedEntity = $namedEntity;
        return $this;
    }

    public function setCurrency(Currency $currency) {
        $this->currency = $currency;
        return $this;
    }

    public function setAmount($amount) {
        $this->amount = $amount;
        return $this;
    }


}
