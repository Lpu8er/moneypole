<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Metatag
 *
 * @author captivea-qch
 */
class Metatag {
    /**
     *
     * @ORM\Id
     * @Orm\Column(name="strkey", type="string")
     * @var string
     */
    protected $strkey;
    /**
     *
     * @Orm\Column(name="display_name", type="string")
     * @var string
     */
    protected $displayName;
}
