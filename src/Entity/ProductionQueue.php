<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of ProductionQueue
 *
 * @author lpu8er
 */
class ProductionQueue {
    /**
     *
     * @var Building 
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Building")
     * @ORM\JoinColumn(name="building_id", referencedColumnName="id")
     */
    protected $building;
    /**
     *
     * @var int 
     * @ORM\Id
     * @ORM\Column(name="queue_index", type="integer")
     */
    protected $queueIndex;
    
    /**
     *
     * @var Recipe 
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumn(name="recipe_id", referencedColumnName="id")
     */
    protected $recipe;
    
    /**
     *
     * @var int 
     * @ORM\Column(name="nb", type="integer")
     */
    protected $nb = 0;
    
    /**
     *
     * @var bool
     * @ORM\Column(name="current", type="boolean")
     */
    protected $current = false;
    
    /**
     *
     * @var int 
     * @ORM\Column(name="points", type="integer")
     */
    protected $points;
    
    public function getBuilding(): Building {
        return $this->building;
    }

    public function getQueueIndex() {
        return $this->queueIndex;
    }

    public function getRecipe(): Recipe {
        return $this->recipe;
    }

    public function getNb() {
        return $this->nb;
    }

    public function getCurrent() {
        return $this->current;
    }

    public function getPoints() {
        return $this->points;
    }

    public function setBuilding(Building $building) {
        $this->building = $building;
        return $this;
    }

    public function setQueueIndex($queueIndex) {
        $this->queueIndex = $queueIndex;
        return $this;
    }

    public function setRecipe(Recipe $recipe) {
        $this->recipe = $recipe;
        return $this;
    }

    public function setNb($nb) {
        $this->nb = $nb;
        return $this;
    }

    public function setCurrent($current) {
        $this->current = $current;
        return $this;
    }

    public function setPoints($points) {
        $this->points = $points;
        return $this;
    }


}
