<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Travel
 *
 * @ORM\Entity
 * @ORM\Table(name="travels")
 * @author lpu8er
 */
class Travel extends IdEntity {
    const STATUS_PLANNED = 'planned';
    const STATUS_TRAVELLING = 'travelling';
    const STATUS_FINISHED = 'finished';
    const STATUS_LOST = 'lost';
    
    /**
     * 
     * @ORM\ManyToOne(targetEntity="Company")
     * @ORM\JoinColumn(name="company_id", referencedColumnName="id", nullable=true)
     * @var Company
     */
    protected $owner = null;
    /**
     * 
     * @ORM\ManyToOne(targetEntity="Building")
     * @ORM\JoinColumn(name="source_id", referencedColumnName="id")
     * @var Building
     */
    protected $source;
    /**
     * 
     * @ORM\ManyToOne(targetEntity="Building")
     * @ORM\JoinColumn(name="target_id", referencedColumnName="id")
     * @var Building
     */
    protected $target;
    /**
     *
     * @var float 
     * @ORM\Column(name="distance", type="decimal", precision=10, scale=6)
     */
    protected $distance;
    /**
     *
     * @var datetime 
     * @ORM\Column(name="start_date", type="datetime")
     */
    protected $startDate;
    /**
     *
     * @var datetime 
     * @ORM\Column(name="end_date", type="datetime")
     */
    protected $endDate;
    /**
     *
     * @var int 
     * @ORM\Column(name="points", type="integer")
     */
    protected $points;
    /**
     *
     * @var string 
     * @ORM\Column(name="status", type="string")
     */
    protected $status;
    
    /**
     *
     * @var float 
     * @ORM\Column(name="cost", type="decimal", precision=12, scale=5)
     */
    protected $cost;
    
    public function getOwner(): Company {
        return $this->owner;
    }

    public function getSource(): Building {
        return $this->source;
    }

    public function getTarget(): Building {
        return $this->target;
    }

    public function getDistance() {
        return $this->distance;
    }

    public function getStartDate(): \Datetime {
        return $this->startDate;
    }

    public function getEndDate(): \Datetime {
        return $this->endDate;
    }

    public function getPoints() {
        return $this->points;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setOwner(Company $owner) {
        $this->owner = $owner;
        return $this;
    }

    public function setSource(Building $source) {
        $this->source = $source;
        return $this;
    }

    public function setTarget(Building $target) {
        $this->target = $target;
        return $this;
    }

    public function setDistance($distance) {
        $this->distance = $distance;
        return $this;
    }

    public function setStartDate(\Datetime $startDate) {
        $this->startDate = $startDate;
        return $this;
    }

    public function setEndDate(\Datetime $endDate) {
        $this->endDate = $endDate;
        return $this;
    }

    public function setPoints($points) {
        $this->points = $points;
        return $this;
    }

    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    public function getCost() {
        return $this->cost;
    }

    public function setCost($cost) {
        $this->cost = $cost;
        return $this;
    }


}
