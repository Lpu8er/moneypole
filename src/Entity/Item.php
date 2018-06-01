<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ItemRepository")
 */
class Item extends IdEntity
{
    /**
     *
     * @ORM\Column(name="technical", type="string")
     * @var string 
     */
    protected $technical;
    
    /**
     *
     * @ORM\Column(name="name", type="string")
     * @var string
     */
    protected $name;
    /**
     *
     * @ORM\Column(name="size", type="decimal", precision=12, scale=5)
     * @var float
     */
    protected $size;
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
     * @ORM\Column(name="firerisk", type="decimal", precision=12, scale=5)
     * @var float
     */
    protected $firerisk;
    /**
     *
     * @ORM\Column(name="hazardness", type="decimal", precision=12, scale=5)
     * @var float
     */
    protected $hazardness;
    /**
     *
     * @ORM\Column(name="universal_start_value", type="decimal", precision=12, scale=5)
     * @var float
     */
    protected $universalStartValue;
    
    public function getTechnical() {
        return $this->technical;
    }

    public function getName() {
        return $this->name;
    }

    public function getSize() {
        return $this->size;
    }

    public function getHappiness() {
        return $this->happiness;
    }

    public function getPollution() {
        return $this->pollution;
    }

    public function getFirerisk() {
        return $this->firerisk;
    }

    public function getHazardness() {
        return $this->hazardness;
    }

    public function getUniversalStartValue() {
        return $this->universalStartValue;
    }

    public function setTechnical($technical) {
        $this->technical = $technical;
        return $this;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function setSize($size) {
        $this->size = $size;
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

    public function setFirerisk($firerisk) {
        $this->firerisk = $firerisk;
        return $this;
    }

    public function setHazardness($hazardness) {
        $this->hazardness = $hazardness;
        return $this;
    }

    public function setUniversalStartValue($universalStartValue) {
        $this->universalStartValue = $universalStartValue;
        return $this;
    }


    
}
