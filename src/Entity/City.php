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
     * @ORM\Column(name="population", type="integer")
     * @var int
     */
    protected $population;
    
    /**
     *
     * @ORM\Column(name="fire_security", type="decimal")
     * @var float
     */
    protected $fireSecurity;
    
    /**
     *
     * @ORM\Column(name="insecurity", type="decimal")
     * @var float
     */
    protected $insecurity;
    
    /**
     *
     * @ORM\Column(name="health", type="decimal")
     * @var float
     */
    protected $health;
    
    /**
     *
     * @ORM\Column(name="pollution", type="decimal")
     * @var float
     */
    protected $pollution;
    
    /**
     *
     * @ORM\Column(name="fire_budget", type="decimal")
     * @var float
     */
    protected $fireBudget;
    
    /**
     *
     * @ORM\Column(name="security_budget", type="decimal")
     * @var float
     */
    protected $securityBudget;
    
    /**
     *
     * @ORM\Column(name="health_budget", type="decimal")
     * @var float
     */
    protected $healthBudget;
    
    /**
     *
     * @ORM\Column(name="green_budget", type="decimal")
     * @var float
     */
    protected $greenBudget;
    
    /**
     *
     * @ORM\Column(name="build_budget", type="decimal")
     * @var float
     */
    protected $buildBudget;
    
    /**
     * Taxe de sol, déduite chaque semaine par batiment par m2
     * @ORM\Column(name="ground_tax", type="decimal")
     * @var float
     */
    protected $groundTax;
    
    /**
     * Taxe de construction, déduite chaque construction par m2
     * @ORM\Column(name="build_tax", type="decimal")
     * @var float
     */
    protected $buildTax;
    
    /**
     * Taxe de vie, déduite partiellement par employe
     * @ORM\Column(name="living_tax", type="decimal")
     * @var float
     */
    protected $livingTax;
    
    /**
     * Cout individuel energetique
     * @ORM\Column(name="energy_cost", type="decimal")
     * @var float
     */
    protected $energyCost;
}
