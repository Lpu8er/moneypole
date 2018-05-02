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
}
