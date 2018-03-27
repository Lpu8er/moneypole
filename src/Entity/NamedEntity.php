<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NamedEntityRepository")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="etype", type="string")
 * @ORM\DiscriminatorMap({"person" = "Person", "country" = "Country", "city" = "City", "building" = "Building", "company" = "Company"})
 */
abstract class NamedEntity extends IdEntity
{
    /**
     *
     * @var type 
     * @ORM\Column(type="string")
     */
    protected $name;
}
