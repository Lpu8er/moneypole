<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\IngredientRepository")
 */
class Ingredient
{
    /**
     *
     * @var type 
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumn(name="recipe_id", referencedColumnName="id")
     */
    protected $recipe;
    /**
     *
     * @var type 
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
    protected $nb;
    
    public function getRecipe(): type {
        return $this->recipe;
    }

    public function getItem(): type {
        return $this->item;
    }

    public function getNb() {
        return $this->nb;
    }

    public function setRecipe(type $recipe) {
        $this->recipe = $recipe;
        return $this;
    }

    public function setItem(type $item) {
        $this->item = $item;
        return $this;
    }

    public function setNb($nb) {
        $this->nb = $nb;
        return $this;
    }


}
