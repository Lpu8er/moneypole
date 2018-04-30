<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CityRepository")
 */
class City extends NamedEntity
{
    /**
     * @ORM\ManyToOne(targetEntity="Country")
     * @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     * @var Country 
     */
    protected $country;
    
    /**
     *
     * @ORM\Column(name="size", type="integer")
     * @var int
     */
    protected $size;
    
    /**
     *
     * @ORM\Column(name="population", type="bigint")
     * @var int
     */
    protected $population;
    
    /**
     *
     * @ORM\Column(name="fire_security", type="decimal", precision=12, scale=5)
     * @var float
     */
    protected $fireSecurity = 0.;
    
    /**
     *
     * @ORM\Column(name="insecurity", type="decimal", precision=12, scale=5)
     * @var float
     */
    protected $insecurity = 0.;
    
    /**
     *
     * @ORM\Column(name="health", type="decimal", precision=12, scale=5)
     * @var float
     */
    protected $health = 0.;
    
    /**
     *
     * @ORM\Column(name="pollution", type="decimal", precision=12, scale=5)
     * @var float
     */
    protected $pollution = 0.;
    
    /**
     *
     * @ORM\Column(name="fire_budget", type="decimal", precision=12, scale=5)
     * @var float
     */
    protected $fireBudget = 0.;
    
    /**
     *
     * @ORM\Column(name="security_budget", type="decimal", precision=12, scale=5)
     * @var float
     */
    protected $securityBudget = 0.;
    
    /**
     *
     * @ORM\Column(name="health_budget", type="decimal", precision=12, scale=5)
     * @var float
     */
    protected $healthBudget = 0.;
    
    /**
     *
     * @ORM\Column(name="green_budget", type="decimal", precision=12, scale=5)
     * @var float
     */
    protected $greenBudget = 0.;
    
    /**
     *
     * @ORM\Column(name="build_budget", type="decimal", precision=12, scale=5)
     * @var float
     */
    protected $buildBudget = 0.;
    
    /**
     * Taxe de sol, déduite chaque semaine par batiment par m2
     * @ORM\Column(name="ground_tax", type="decimal", precision=12, scale=5)
     * @var float
     */
    protected $groundTax;
    
    /**
     * Taxe de construction, déduite chaque construction par m2
     * @ORM\Column(name="build_tax", type="decimal", precision=12, scale=5)
     * @var float
     */
    protected $buildTax;
    
    /**
     * Taxe de vie, déduite partiellement par employe
     * @ORM\Column(name="living_tax", type="decimal", precision=12, scale=5)
     * @var float
     */
    protected $livingTax;
    
    /**
     * Cout individuel energetique
     * @ORM\Column(name="energy_cost", type="decimal", precision=12, scale=5)
     * @var float
     */
    protected $energyCost;
}
