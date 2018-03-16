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
    protected $name;
    protected $city;
    protected $baseSize;
    protected $currentSize;
    protected $baseFireHazard;
    protected $currentFireHazard;
    protected $baseSecurity;
    protected $currentSecurity;
    protected $baseSafety;
    protected $currentSafety;
    protected $basePollution;
    protected $currentPollution;
    protected $company = null;
    protected $building = false;
    protected $buildPoints = 0;
    protected $startBuild = null;
}
