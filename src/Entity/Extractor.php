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
}
