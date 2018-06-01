<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CompanyRepository")
 */
class Company extends NamedEntity
{
    /**
     * @ORM\ManyToOne(targetEntity="Building")
     * @ORM\JoinColumn(name="hq_building_id", referencedColumnName="id", nullable=true)
     * @var Building 
     */
    protected $hqBuilding = null;
    
    /**
     * @ORM\ManyToOne(targetEntity="City")
     * @ORM\JoinColumn(name="hq_city_id", referencedColumnName="id")
     * @var City 
     */
    protected $hqCity;
    
    /**
     * @ORM\ManyToOne(targetEntity="Country")
     * @ORM\JoinColumn(name="hq_country_id", referencedColumnName="id")
     * @var Country 
     */
    protected $hqCountry;
    
    /**
     * Participation aux taxes : cette valeur sert d'étalon vs min/max wages
     * @ORM\Column(name="living_participation", type="decimal", precision=12, scale=5)
     * @var float 
     */
    protected $livingParticipation = 0.;
    
    /**
     * 
     * @ORM\Column(name="min_wage", type="decimal", precision=12, scale=5)
     * @var float 
     */
    protected $minWage = 0.;
    
    /**
     * 
     * @ORM\Column(name="max_wage", type="decimal", precision=12, scale=5)
     * @var float 
     */
    protected $maxWage = 0.;
    
    /**
     * @ORM\ManyToOne(targetEntity="Person")
     * @ORM\JoinColumn(name="boss_id", referencedColumnName="id")
     * @var Person 
     */
    protected $boss;
    
    /**
     * Salaire patronal. Ce salaire est évalué uniquement lors de la compta, et est alors aussi utilisé pour la reputation entreprise
     * @ORM\Column(name="boss_wage", type="decimal", precision=12, scale=5)
     * @var float 
     */
    protected $bossWage = 0.;
    
    /**
     * 
     * @ORM\Column(name="happies", type="integer")
     * @var int
     */
    protected $happies = 0;
    
    /**
     * 
     * @ORM\Column(name="saddies", type="integer")
     * @var int
     */
    protected $saddies = 0;
    
    /**
     *
     * @var Buildings[]
     * @ORM\OneToMany(targetEntity="Building", mappedBy="company")
     */
    protected $buildings;
    
    public function __construct() {
        $this->buildings = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    public function getHqBuilding(): Building {
        return $this->hqBuilding;
    }

    public function getHqCity(): City {
        return $this->hqCity;
    }

    public function getHqCountry(): Country {
        return $this->hqCountry;
    }

    public function getLivingParticipation() {
        return $this->livingParticipation;
    }

    public function getMinWage() {
        return $this->minWage;
    }

    public function getMaxWage() {
        return $this->maxWage;
    }

    public function getBoss(): Person {
        return $this->boss;
    }

    public function getBossWage() {
        return $this->bossWage;
    }

    public function getHappies() {
        return $this->happies;
    }

    public function getSaddies() {
        return $this->saddies;
    }

    public function setHqBuilding(Building $hqBuilding) {
        $this->hqBuilding = $hqBuilding;
        return $this;
    }

    public function setHqCity(City $hqCity) {
        $this->hqCity = $hqCity;
        return $this;
    }

    public function setHqCountry(Country $hqCountry) {
        $this->hqCountry = $hqCountry;
        return $this;
    }

    public function setLivingParticipation($livingParticipation) {
        $this->livingParticipation = $livingParticipation;
        return $this;
    }

    public function setMinWage($minWage) {
        $this->minWage = $minWage;
        return $this;
    }

    public function setMaxWage($maxWage) {
        $this->maxWage = $maxWage;
        return $this;
    }

    public function setBoss(Person $boss) {
        $this->boss = $boss;
        return $this;
    }

    public function setBossWage($bossWage) {
        $this->bossWage = $bossWage;
        return $this;
    }

    public function setHappies($happies) {
        $this->happies = $happies;
        return $this;
    }

    public function setSaddies($saddies) {
        $this->saddies = $saddies;
        return $this;
    }
    
    public function getBuildings() {
        return $this->buildings;
    }

    public function setBuildings($buildings) {
        $this->buildings = $buildings;
        return $this;
    }


}
