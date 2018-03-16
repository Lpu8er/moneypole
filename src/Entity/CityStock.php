<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CityStockRepository")
 */
class CityStock extends AbstractEntity
{
    protected $city;
    protected $item;
}
