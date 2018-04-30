<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BuildingRepository")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="btype", type="string")
 * @ORM\DiscriminatorMap({"basic" = "Building", "factory" = "Factory", "office" = "Office", "shop" = "Shop", "warehouse" = "Warehouse"})
 */
class Building extends IdEntity {
    /**
     *
     * @ORM\Column(name="name", type="string")
     * @var string
     */
    protected $name;
    /**
     * @ORM\ManyToOne(targetEntity="City")
     * @ORM\JoinColumn(name="city_id", referencedColumnName="id")
     * @var City 
     */
    protected $city;
    /**
     *
     * @ORM\Column(name="base_size", type="integer")
     * @var int
     */
    protected $baseSize;
    /**
     *
     * @ORM\Column(name="current_size", type="integer")
     * @var int
     */
    protected $currentSize;
    /**
     *
     * @ORM\Column(name="base_fire_hazard", type="decimal", precision=12, scale=5)
     * @var float
     */
    protected $baseFireHazard;
    /**
     *
     * @ORM\Column(name="current_fire_hazard", type="decimal", precision=12, scale=5)
     * @var float
     */
    protected $currentFireHazard;
    /**
     *
     * @ORM\Column(name="base_security", type="decimal", precision=12, scale=5)
     * @var float
     */
    protected $baseSecurity;
    /**
     *
     * @ORM\Column(name="current_security", type="decimal", precision=12, scale=5)
     * @var float
     */
    protected $currentSecurity;
    /**
     *
     * @ORM\Column(name="base_safety", type="decimal", precision=12, scale=5)
     * @var float
     */
    protected $baseSafety;
    /**
     *
     * @ORM\Column(name="current_safety", type="decimal", precision=12, scale=5)
     * @var float
     */
    protected $currentSafety;
    /**
     *
     * @ORM\Column(name="base_pollution", type="decimal", precision=12, scale=5)
     * @var float
     */
    protected $basePollution;
    /**
     *
     * @ORM\Column(name="current_pollution", type="decimal", precision=12, scale=5)
     * @var float
     */
    protected $currentPollution;
    /**
     *
     * @ORM\Column(name="base_employees", type="integer")
     * @var int
     */
    protected $baseEmployees;
    /**
     *
     * @ORM\Column(name="current_employees", type="integer")
     * @var int
     */
    protected $currentEmployees;
    /**
     * @ORM\ManyToOne(targetEntity="Company")
     * @ORM\JoinColumn(name="company_id", referencedColumnName="id", nullable=true)
     * @var Company 
     */
    protected $company = null;
    /**
     *
     * @ORM\Column(name="building", type="boolean")
     * @var bool
     */
    protected $building = false;
    /**
     *
     * @ORM\Column(name="build_points", type="integer")
     * @var int
     */
    protected $buildPoints = 0;
    /**
     *
     * @ORM\Column(name="start_build", type="datetime", nullable=true)
     * @var \DateTime
     */
    protected $startBuild = null;
    /**
     * Energetic consumption by day
     * @ORM\Column(name="energy", type="integer")
     * @var int
     */
    protected $energy = 0;
}
