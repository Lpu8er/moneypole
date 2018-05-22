<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of History
 *
 * @author lpu8er
 * @ORM\Entity(repositoryClass="App\Repository\HistoryRepository")
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
}
