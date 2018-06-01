<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CountryRepository")
 */
class Country extends NamedEntity
{
    /**
     * Taxe de sol par m2 par ville
     * @ORM\Column(name="ground_tax", type="decimal", precision=12, scale=5)
     * @var float
     */
    protected $groundTax;
    
    /**
     * Taxe de vie par employé par ville
     * @ORM\Column(name="living_tax", type="decimal", precision=12, scale=5)
     * @var float
     */
    protected $livingTax;
    
    /**
     * Peut etre choisi en nation de depart
     * @ORM\Column(name="available_start", type="boolean")
     * @var bool
     */
    protected $availableStart = false;
    
    /**
     * @ORM\ManyToOne(targetEntity="City")
     * @ORM\JoinColumn(name="capital_id", referencedColumnName="id", nullable=true)
     * @var City 
     */
    protected $capital;
    
    /**
     * @ORM\ManyToOne(targetEntity="Currency")
     * @ORM\JoinColumn(name="currency_id", referencedColumnName="id", nullable=true)
     * @var Currency 
     */
    protected $currency;
    
    public function getGroundTax() {
        return $this->groundTax;
    }

    public function getLivingTax() {
        return $this->livingTax;
    }

    public function getAvailableStart() {
        return $this->availableStart;
    }

    public function getCapital(): City {
        return $this->capital;
    }

    public function getCurrency(): Currency {
        return $this->currency;
    }

    public function setGroundTax($groundTax) {
        $this->groundTax = $groundTax;
        return $this;
    }

    public function setLivingTax($livingTax) {
        $this->livingTax = $livingTax;
        return $this;
    }

    public function setAvailableStart($availableStart) {
        $this->availableStart = $availableStart;
        return $this;
    }

    public function setCapital(City $capital) {
        $this->capital = $capital;
        return $this;
    }

    public function setCurrency(Currency $currency) {
        $this->currency = $currency;
        return $this;
    }


}
