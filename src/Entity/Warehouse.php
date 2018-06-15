<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\WarehouseRepository")
 * @ORM\Table(name="warehouses")
 */
class Warehouse extends Building
{
    public function getEType(): string {
        return static::ETYPE_WAREHOUSE;
    }
}
