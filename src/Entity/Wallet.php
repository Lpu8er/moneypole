<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\WalletRepository")
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
}
