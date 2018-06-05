<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Travel
 *
 * @ORM\Entity
 * @ORM\Table
 * @author lpu8er
 */
class Travel extends AbstractEntity {
    protected $source;
    protected $target;
    protected $distance;
    protected $startDate;
    protected $endDate;
    protected $points;
}
