<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NamedEntityRepository")
 * @ORM\InheritanceType("JOINED")
 * @ORM\Table(name="named_entities")
 * @ORM\DiscriminatorColumn(name="etype", type="string")
 * @ORM\DiscriminatorMap({"person" = "Person", "country" = "Country", "city" = "City", "building" = "Building", "company" = "Company", "factory" = "Factory", "office" = "Office", "shop" = "Shop", "warehouse" = "Warehouse"})
 */
abstract class NamedEntity extends IdEntity
{
    const ETYPE_PERSON = 'person';
    const ETYPE_COUNTRY = 'country';
    const ETYPE_CITY = 'city';
    const ETYPE_BUILDING = 'building';
    const ETYPE_COMPANY = 'company';
    const ETYPE_FACTORY = 'factory';
    const ETYPE_OFFICE = 'office';
    const ETYPE_SHOP = 'shop';
    const ETYPE_WAREHOUSE = 'warehouse';
    
    /**
     * @return string
     */
    abstract public function getEType(): string;
    /**
     * 
     * @return User|null
     */
    public function getOwner(){
        return null;
    }
    
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
