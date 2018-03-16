<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of IdEntity
 *
 * @author captivea-qch
 */
abstract class IdEntity extends AbstractEntity {
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    protected $id;
}
