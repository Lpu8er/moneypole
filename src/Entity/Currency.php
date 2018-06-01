<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CurrencyRepository")
 */
class Currency extends IdEntity
{
    /**
     *
     * @ORM\Column(name="name", type="string")
     * @var string
     */
    protected $name;

    /**
     *
     * @ORM\Column(name="symbol", type="string")
     * @var string
     */
    protected $symbol;
    
    /**
     *
     * @ORM\Column(name="convert_rate", type="decimal", precision=12, scale=5)
     * @var string
     */
    protected $convertRate;
    
    public function getName() {
        return $this->name;
    }

    public function getSymbol() {
        return $this->symbol;
    }

    public function getConvertRate() {
        return $this->convertRate;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function setSymbol($symbol) {
        $this->symbol = $symbol;
        return $this;
    }

    public function setConvertRate($convertRate) {
        $this->convertRate = $convertRate;
        return $this;
    }


}
