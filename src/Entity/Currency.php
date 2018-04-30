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
     * @ORM\Column(name="convert_rate", type="decimal")
     * @var string
     */
    protected $convertRate;
}
