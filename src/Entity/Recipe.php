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
     * @ORM\Column(name="pollution", type="decimal", precision=12, scale=5)
     */
    protected $pollution;
    /**
     *
     * @var int 
     * @ORM\Column(name="energy", type="integer")
     */
    protected $energy;
    
    public function getName() {
        return $this->name;
    }

    public function getResultProduct(): Product {
        return $this->resultProduct;
    }

    public function getPoints() {
        return $this->points;
    }

    public function getPollution() {
        return $this->pollution;
    }

    public function getEnergy() {
        return $this->energy;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function setResultProduct(Product $resultProduct) {
        $this->resultProduct = $resultProduct;
        return $this;
    }

    public function setPoints($points) {
        $this->points = $points;
        return $this;
    }

    public function setPollution($pollution) {
        $this->pollution = $pollution;
        return $this;
    }

    public function setEnergy($energy) {
        $this->energy = $energy;
        return $this;
    }


}
