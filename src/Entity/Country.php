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
     * @ORM\Column(name="ground_tax", type="decimal")
     * @var float
     */
    protected $groundTax;
    
    /**
     * Taxe de vie par employé par ville
     * @ORM\Column(name="living_tax", type="decimal")
     * @var float
     */
    protected $livingTax;
}
