<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of History
 *
 * @author lpu8er
 */
class History {
    /**
     *
     * @ORM\Id
     * @ORM\Column(name="date_history", type="date")
     * @var date
     */
    protected $dateHistory;
    /**
     *
     * @ORM\Id
     * @ORM\Column(name="strkey", type="string")
     * @var string
     */
    protected $strkey;
    /**
     *
     * @ORM\Column(name="val", type="decimal", type="decimal", precision=12, scale=5)
     * @var float
     */
    protected $val;
}
