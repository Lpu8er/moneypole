<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RecipeRepository")
 */
class Recipe extends IdEntity
{
    protected $name;
    protected $resultProduct;
    protected $points;
    protected $pollution;
    protected $energy;
}
