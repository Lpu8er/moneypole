<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User extends IdEntity implements UserInterface, \Serializable {
    const ROLE_USER = 'ROLE_USER';
    const ROLE_BOT = 'ROLE_BOT';
    const ROLE_ADMIN = 'ROLE_ADMIN';
    
    /**
     *
     * @var type 
     * @ORM\Column(name="username", type="string", length=25)
     */
    protected $username;
    /**
     *
     * @var type 
     * @ORM\Column(name="pwd", type="string", length=64)
     */
    protected $pwd;
    /**
     *
     * @var type 
     * @ORM\Column(name="display_name", type="string", length=200)
     */
    protected $displayName;
    /**
     *
     * @var type 
     * @ORM\Column(name="email", type="string", length=200)
     */
    protected $email;
    /**
     *
     * @var type 
     * @ORM\Column(name="enabled", type="boolean", nullable=false)
     */
    protected $enabled = false;
    /**
     *
     * @var type 
     * @ORM\Column(name="admin", type="boolean", nullable=false)
     */
    protected $admin = false;
    /**
     *
     * @var type 
     * @ORM\Column(name="bot", type="boolean", nullable=false)
     */
    protected $bot = false;
    
    /**
     * @ORM\ManyToOne(targetEntity="Person")
     * @ORM\JoinColumn(name="character_id", referencedColumnName="id", nullable=true)
     * @var Person 
     */
    protected $character = null;
    
    public function eraseCredentials() { }
    
    public function getRoles() {
        $r = [
            static::ROLE_USER,
        ];
        if($this->admin) {
            $r[] = static::ROLE_ADMIN;
        }
        if($this->bot) {
            $r[] = static::ROLE_BOT;
        }
        return $r;
    }
    
    public function getUsername() {
        return $this->username;
    }
    
    public function getPassword() {
        return $this->pwd;
    }
    
    public function getSalt() {
        return null;
    }
    
    public function serialize() {
        return serialize([
            $this->id,
            $this->username,
            $this->pwd,
        ]);
    }
    
    public function unserialize($serialized) {
        list($this->id, $this->username, $this->pwd) = unserialize($serialized);
    }
    
}
