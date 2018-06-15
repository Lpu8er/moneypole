<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CityRepository")
 * @ORM\Table(name="cities")
 */
class City extends NamedEntity
{
    public function getEType(): string {
        return static::ETYPE_CITY;
    }
    
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
    
    /**
     * Peut etre choisi en ville de création
     * @ORM\Column(name="available_found", type="boolean")
     * @var bool
     */
    protected $availableFound = false;
    
    /**
     * 
     * @ORM\Column(name="lng", type="decimal", precision=10, scale=6)
     * @var float
     */
    protected $lng;
    
    /**
     * 
     * @ORM\Column(name="lat", type="decimal", precision=10, scale=6)
     * @var float
     */
    protected $lat;
    
    public function getCountry(): Country {
        return $this->country;
    }

    public function getSize() {
        return $this->size;
    }

    public function getPopulation() {
        return $this->population;
    }

    public function getFireSecurity() {
        return $this->fireSecurity;
    }

    public function getInsecurity() {
        return $this->insecurity;
    }

    public function getHealth() {
        return $this->health;
    }

    public function getPollution() {
        return $this->pollution;
    }

    public function getFireBudget() {
        return $this->fireBudget;
    }

    public function getSecurityBudget() {
        return $this->securityBudget;
    }

    public function getHealthBudget() {
        return $this->healthBudget;
    }

    public function getGreenBudget() {
        return $this->greenBudget;
    }

    public function getBuildBudget() {
        return $this->buildBudget;
    }

    public function getGroundTax() {
        return $this->groundTax;
    }

    public function getBuildTax() {
        return $this->buildTax;
    }

    public function getLivingTax() {
        return $this->livingTax;
    }

    public function getEnergyCost() {
        return $this->energyCost;
    }

    public function getAvailableFound() {
        return $this->availableFound;
    }

    public function setCountry(Country $country) {
        $this->country = $country;
        return $this;
    }

    public function setSize($size) {
        $this->size = $size;
        return $this;
    }

    public function setPopulation($population) {
        $this->population = $population;
        return $this;
    }

    public function setFireSecurity($fireSecurity) {
        $this->fireSecurity = $fireSecurity;
        return $this;
    }

    public function setInsecurity($insecurity) {
        $this->insecurity = $insecurity;
        return $this;
    }

    public function setHealth($health) {
        $this->health = $health;
        return $this;
    }

    public function setPollution($pollution) {
        $this->pollution = $pollution;
        return $this;
    }

    public function setFireBudget($fireBudget) {
        $this->fireBudget = $fireBudget;
        return $this;
    }

    public function setSecurityBudget($securityBudget) {
        $this->securityBudget = $securityBudget;
        return $this;
    }

    public function setHealthBudget($healthBudget) {
        $this->healthBudget = $healthBudget;
        return $this;
    }

    public function setGreenBudget($greenBudget) {
        $this->greenBudget = $greenBudget;
        return $this;
    }

    public function setBuildBudget($buildBudget) {
        $this->buildBudget = $buildBudget;
        return $this;
    }

    public function setGroundTax($groundTax) {
        $this->groundTax = $groundTax;
        return $this;
    }

    public function setBuildTax($buildTax) {
        $this->buildTax = $buildTax;
        return $this;
    }

    public function setLivingTax($livingTax) {
        $this->livingTax = $livingTax;
        return $this;
    }

    public function setEnergyCost($energyCost) {
        $this->energyCost = $energyCost;
        return $this;
    }

    public function setAvailableFound($availableFound) {
        $this->availableFound = $availableFound;
        return $this;
    }
    public function getLng() {
        return $this->lng;
    }

    public function getLat() {
        return $this->lat;
    }

    public function setLng($lng) {
        $this->lng = $lng;
        return $this;
    }

    public function setLat($lat) {
        $this->lat = $lat;
        return $this;
    }
    
}
