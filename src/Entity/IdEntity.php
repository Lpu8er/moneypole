<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of IdEntity
 *
 * @author lpu8er
 */
abstract class IdEntity extends AbstractEntity {
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    protected $id;
    
    public function getId() {
        return $this->id;
    }


}
