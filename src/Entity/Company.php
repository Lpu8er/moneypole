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
}
