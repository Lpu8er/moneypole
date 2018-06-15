<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\IngredientRepository")
 * @ORM\Table(name="ingredients")
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
    
    public function getRecipe(): Recipe {
        return $this->recipe;
    }

    public function getItem(): Item {
        return $this->item;
    }

    public function getNb() {
        return $this->nb;
    }

    public function setRecipe(Recipe $recipe) {
        $this->recipe = $recipe;
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
