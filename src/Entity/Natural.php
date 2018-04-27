<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NaturalRepository")
 * @ORM\Table(name="naturals")
 */
class Natural extends Item
{
    
}
