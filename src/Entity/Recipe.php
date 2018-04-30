<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RecipeRepository")
 */
class Recipe extends IdEntity
{
    /**
     *
     * @var string 
     * @ORM\Column(name="name", type="string")
     */
    protected $name;
    /**
     *
     * @var Product 
     * @ORM\ManyToOne(targetEntity="Product")
     * @ORM\JoinColumn(name="result_product_id", referencedColumnName="id")
     */
    protected $resultProduct;
    /**
     *
     * @var int 
     * @ORM\Column(name="points", type="integer")
     */
    protected $points;
    /**
     *
     * @var float 
     * @ORM\Column(name="pollution", type="decimal")
     */
    protected $pollution;
    /**
     *
     * @var int 
     * @ORM\Column(name="energy", type="integer")
     */
    protected $energy;
}
