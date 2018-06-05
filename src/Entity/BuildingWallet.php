<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BuildingWalletRepository")
 */
class BuildingWallet extends AbstractEntity
{
    /**
     *
     * @var type 
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Building")
     * @ORM\JoinColumn(name="building_id", referencedColumnName="id")
     */
    protected $building;
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
    protected $amount;
    
    public function setBuilding(Building $building) {
        $this->building = $building;
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
