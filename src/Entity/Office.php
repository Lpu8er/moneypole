<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OfficeRepository")
 * @ORM\Table(name="offices")
 */
class Office extends Building
{
    public function getEType(): string {
        return static::ETYPE_OFFICE;
    }
}
