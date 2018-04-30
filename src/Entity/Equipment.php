<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EquipmentRepository")
 */
class Equipment extends IdEntity
{
    /**
     *
     * @ORM\Column(name="name", type="string")
     * @var string
     */
    protected $name;
    /**
     * 
     * @ORM\Column(name="size", type="integer")
     * @var int
     */
    protected $size;
    /**
     * 
     * @ORM\Column(name="employees", type="integer")
     * @var int
     */
    protected $employees;
    /**
     * 
     * @ORM\Column(name="build_points", type="integer")
     * @var int
     */
    protected $buildPoints;
    /**
     * 
     * @ORM\Column(name="build_cost", type="decimal", precision=12, scale=5)
     * @var float
     */
    protected $buildCost;
    /**
     *
     * @ORM\Column(name="restrict_type", type="string")
     * @var string
     */
    protected $restrictType;
    /**
     * 
     * @ORM\Column(name="storage", type="integer")
     * @var int
     */
    protected $storage;
    /**
     * 
     * @ORM\Column(name="happiness", type="decimal", precision=12, scale=5)
     * @var float
     */
    protected $happiness;
    /**
     * 
     * @ORM\Column(name="pollution", type="decimal", precision=12, scale=5)
     * @var float
     */
    protected $pollution;
    /**
     * 
     * @ORM\Column(name="fire_hazard", type="decimal", precision=12, scale=5)
     * @var float
     */
    protected $fireHazard;
    /**
     * 
     * @ORM\Column(name="security", type="decimal", precision=12, scale=5)
     * @var float
     */
    protected $security;
    /**
     * 
     * @ORM\Column(name="safety", type="decimal", precision=12, scale=5)
     * @var float
     */
    protected $safety;
    /**
     * 
     * @ORM\Column(name="energy", type="integer")
     * @var int
     */
    protected $energy;
    /**
     * 
     * @ORM\Column(name="health", type="decimal", precision=12, scale=5)
     * @var float
     */
    protected $health;
}
