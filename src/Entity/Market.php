<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MarketRepository")
 * @ORM\Table(name="markets")
 */
class Market extends AbstractEntity
{
    /**
     *
     * @var type 
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Shop")
     * @ORM\JoinColumn(name="shop_id", referencedColumnName="id")
     */
    protected $shop;
    /**
     *
     * @var type 
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumn(name="item_id", referencedColumnName="id")
     */
    protected $item;
    /**
     *
     * @ORM\Column(name="nb", type="integer")
     * @var int
     */
    protected $nb = 0;
    /**
     *
     * @ORM\Column(name="unit_price", type="decimal", precision=12, scale=5)
     * @var float
     */
    protected $unitPrice = 0.;
    
    public function getShop(): Shop {
        return $this->shop;
    }

    public function getItem(): Item {
        return $this->item;
    }

    public function getNb() {
        return $this->nb;
    }

    public function getUnitPrice() {
        return $this->unitPrice;
    }

    public function setShop(Shop $shop) {
        $this->shop = $shop;
        return $this;
    }

    public function setItem(Item $item) {
        $this->item = $item;
        return $this;
    }

    public function setNb($nb) {
        $this->nb = $nb;
        return $this;
    }

    public function setUnitPrice($unitPrice) {
        $this->unitPrice = $unitPrice;
        return $this;
    }


}
