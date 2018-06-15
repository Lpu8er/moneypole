<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FactoryRepository")
 * @ORM\Table(name="factories")
 */
class Factory extends Building
{
    public function getEType(): string {
        return static::ETYPE_FACTORY;
    }
}
