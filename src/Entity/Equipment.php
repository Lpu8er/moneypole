<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EquipmentRepository")
 */
class Equipment extends IdEntity
{
    protected $size;
    protected $employees;
    protected $buildPoints;
    protected $buildCost;
    protected $restrictType;
    protected $storage;
    protected $happiness;
    protected $pollution;
    protected $fireHazard;
    protected $security;
    protected $safety;
    protected $energy;
    protected $health;
}
