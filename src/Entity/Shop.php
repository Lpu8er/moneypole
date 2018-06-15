<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ShopRepository")
 * @ORM\Table(name="shops")
 */
class Shop extends Building
{
    public function getEType(): string {
        return static::ETYPE_SHOP;
    }
}
