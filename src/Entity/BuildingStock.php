<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BuildingStockRepository")
 * @ORM\Table(name="building_stocks")
 */
class BuildingStock
{
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
     * @var Item 
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumn(name="item_id", referencedColumnName="id")
     */
    protected $item;
    /**
     *
     * @ORM\Column(name="nb", type="integer")
     * @var int
     */
    protected $nb = 0;
    
    public function getBuilding(): Building {
        return $this->building;
    }

    public function getItem(): Item {
        return $this->item;
    }

    public function getNb() {
        return $this->nb;
    }

    public function setBuilding(Building $building) {
        $this->building = $building;
        return $this;
    }

    public function setItem(Item $item) {
        $this->item = $item;
        return $this;
    }

    public function setNb($nb) {
        $this->nb = $nb;
        return $this;
    }


}
