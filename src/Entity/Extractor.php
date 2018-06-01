<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ExtractorRepository")
 */
class Extractor
{
    /**
     *
     * @var type 
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="City")
     * @ORM\JoinColumn(name="city_id", referencedColumnName="id")
     */
    protected $city;
    /**
     *
     * @var type 
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Natural")
     * @ORM\JoinColumn(name="natural_id", referencedColumnName="id")
     */
    protected $natural;
    
    /**
     *
     * @ORM\Column(name="nb", type="integer")
     * @var int
     */
    protected $amount = 0;
    
    public function getCity(): type {
        return $this->city;
    }

    public function getNatural(): type {
        return $this->natural;
    }

    public function getAmount() {
        return $this->amount;
    }

    public function setCity(type $city) {
        $this->city = $city;
        return $this;
    }

    public function setNatural(type $natural) {
        $this->natural = $natural;
        return $this;
    }

    public function setAmount($amount) {
        $this->amount = $amount;
        return $this;
    }


}
