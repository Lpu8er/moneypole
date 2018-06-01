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
    
    public function getName() {
        return $this->name;
    }

    public function getSize() {
        return $this->size;
    }

    public function getEmployees() {
        return $this->employees;
    }

    public function getBuildPoints() {
        return $this->buildPoints;
    }

    public function getBuildCost() {
        return $this->buildCost;
    }

    public function getRestrictType() {
        return $this->restrictType;
    }

    public function getStorage() {
        return $this->storage;
    }

    public function getHappiness() {
        return $this->happiness;
    }

    public function getPollution() {
        return $this->pollution;
    }

    public function getFireHazard() {
        return $this->fireHazard;
    }

    public function getSecurity() {
        return $this->security;
    }

    public function getSafety() {
        return $this->safety;
    }

    public function getEnergy() {
        return $this->energy;
    }

    public function getHealth() {
        return $this->health;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function setSize($size) {
        $this->size = $size;
        return $this;
    }

    public function setEmployees($employees) {
        $this->employees = $employees;
        return $this;
    }

    public function setBuildPoints($buildPoints) {
        $this->buildPoints = $buildPoints;
        return $this;
    }

    public function setBuildCost($buildCost) {
        $this->buildCost = $buildCost;
        return $this;
    }

    public function setRestrictType($restrictType) {
        $this->restrictType = $restrictType;
        return $this;
    }

    public function setStorage($storage) {
        $this->storage = $storage;
        return $this;
    }

    public function setHappiness($happiness) {
        $this->happiness = $happiness;
        return $this;
    }

    public function setPollution($pollution) {
        $this->pollution = $pollution;
        return $this;
    }

    public function setFireHazard($fireHazard) {
        $this->fireHazard = $fireHazard;
        return $this;
    }

    public function setSecurity($security) {
        $this->security = $security;
        return $this;
    }

    public function setSafety($safety) {
        $this->safety = $safety;
        return $this;
    }

    public function setEnergy($energy) {
        $this->energy = $energy;
        return $this;
    }

    public function setHealth($health) {
        $this->health = $health;
        return $this;
    }


}
