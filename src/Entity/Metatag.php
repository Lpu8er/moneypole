<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Metatag
 *
 * @author lpu8er
 * @ORM\Entity
 * @ORM\Table(name="metatags")
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
    
    public function getStrkey() {
        return $this->strkey;
    }

    public function getDisplayName() {
        return $this->displayName;
    }

    public function setStrkey($strkey) {
        $this->strkey = $strkey;
        return $this;
    }

    public function setDisplayName($displayName) {
        $this->displayName = $displayName;
        return $this;
    }


}
