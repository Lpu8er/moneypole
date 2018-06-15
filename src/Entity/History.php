<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of History
 *
 * @author lpu8er
 * @ORM\Entity(repositoryClass="App\Repository\HistoryRepository")
 * @ORM\Table(name="histories")
 */
class History {
    const GROUP_MARKET = 'market';
    const CATEG_UNITPRICE = 'unitprice'; // prix unitaire en marché (vendu ou non)
    const CATEG_QUANTITY = 'quantity'; // quantity sur le marché
    const CATEG_SOLD = 'sold'; // total vendu
    
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
    
    public function getDateHistory(): \DateTime {
        return $this->dateHistory;
    }

    public function getStrkey() {
        return $this->strkey;
    }

    public function getVal() {
        return $this->val;
    }

    public function setDateHistory(\DateTime $dateHistory) {
        $this->dateHistory = $dateHistory;
        return $this;
    }

    public function setStrkey($strkey) {
        $this->strkey = $strkey;
        return $this;
    }

    public function setVal($val) {
        $this->val = $val;
        return $this;
    }


}
