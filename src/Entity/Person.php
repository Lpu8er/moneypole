<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PersonRepository")
 * @ORM\Table(name="persons")
 */
class Person extends NamedEntity
{
    public function getEType(): string {
        return static::ETYPE_PERSON;
    }
    
    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=true)
     * @var User 
     */
    protected $user = null;
    
    /**
     * @ORM\ManyToOne(targetEntity="Country")
     * @ORM\JoinColumn(name="nationality_id", referencedColumnName="id")
     * @var Country
     */
    protected $nationality;
    
    public function getUser(): User {
        return $this->user;
    }

    public function getNationality(): Country {
        return $this->nationality;
    }

    public function setUser(User $user) {
        $this->user = $user;
        return $this;
    }

    public function setNationality(Country $nationality) {
        $this->nationality = $nationality;
        return $this;
    }


}
