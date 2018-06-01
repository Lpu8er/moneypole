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
    
    public function getName() {
        return $this->name;
    }

    public function getCity(): City {
        return $this->city;
    }

    public function getBaseSize() {
        return $this->baseSize;
    }

    public function getCurrentSize() {
        return $this->currentSize;
    }

    public function getBaseFireHazard() {
        return $this->baseFireHazard;
    }

    public function getCurrentFireHazard() {
        return $this->currentFireHazard;
    }

    public function getBaseSecurity() {
        return $this->baseSecurity;
    }

    public function getCurrentSecurity() {
        return $this->currentSecurity;
    }

    public function getBaseSafety() {
        return $this->baseSafety;
    }

    public function getCurrentSafety() {
        return $this->currentSafety;
    }

    public function getBasePollution() {
        return $this->basePollution;
    }

    public function getCurrentPollution() {
        return $this->currentPollution;
    }

    public function getBaseEmployees() {
        return $this->baseEmployees;
    }

    public function getCurrentEmployees() {
        return $this->currentEmployees;
    }

    public function getCompany(): Company {
        return $this->company;
    }

    public function getBuilding() {
        return $this->building;
    }

    public function getBuildPoints() {
        return $this->buildPoints;
    }

    public function getStartBuild(): \DateTime {
        return $this->startBuild;
    }

    public function getEnergy() {
        return $this->energy;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function setCity(City $city) {
        $this->city = $city;
        return $this;
    }

    public function setBaseSize($baseSize) {
        $this->baseSize = $baseSize;
        return $this;
    }

    public function setCurrentSize($currentSize) {
        $this->currentSize = $currentSize;
        return $this;
    }

    public function setBaseFireHazard($baseFireHazard) {
        $this->baseFireHazard = $baseFireHazard;
        return $this;
    }

    public function setCurrentFireHazard($currentFireHazard) {
        $this->currentFireHazard = $currentFireHazard;
        return $this;
    }

    public function setBaseSecurity($baseSecurity) {
        $this->baseSecurity = $baseSecurity;
        return $this;
    }

    public function setCurrentSecurity($currentSecurity) {
        $this->currentSecurity = $currentSecurity;
        return $this;
    }

    public function setBaseSafety($baseSafety) {
        $this->baseSafety = $baseSafety;
        return $this;
    }

    public function setCurrentSafety($currentSafety) {
        $this->currentSafety = $currentSafety;
        return $this;
    }

    public function setBasePollution($basePollution) {
        $this->basePollution = $basePollution;
        return $this;
    }

    public function setCurrentPollution($currentPollution) {
        $this->currentPollution = $currentPollution;
        return $this;
    }

    public function setBaseEmployees($baseEmployees) {
        $this->baseEmployees = $baseEmployees;
        return $this;
    }

    public function setCurrentEmployees($currentEmployees) {
        $this->currentEmployees = $currentEmployees;
        return $this;
    }

    public function setCompany(Company $company) {
        $this->company = $company;
        return $this;
    }

    public function setBuilding($building) {
        $this->building = $building;
        return $this;
    }

    public function setBuildPoints($buildPoints) {
        $this->buildPoints = $buildPoints;
        return $this;
    }

    public function setStartBuild(\DateTime $startBuild) {
        $this->startBuild = $startBuild;
        return $this;
    }

    public function setEnergy($energy) {
        $this->energy = $energy;
        return $this;
    }
}
