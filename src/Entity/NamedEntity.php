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
     * @var string 
     * @ORM\Column(type="string")
     */
    protected $name;
    
    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name) {
        $this->name = $name;
        return $this;
    }


}
