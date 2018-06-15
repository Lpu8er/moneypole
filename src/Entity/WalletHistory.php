<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of WalletHistory
 *
 * @author lpu8er
 * @ORM\Entity(repositoryClass="App\Repository\WalletHistoryRepository")
 * @ORM\Table(name="wallet_histories")
 */
class WalletHistory extends IdEntity {
    
    /**
     *
     * @ORM\Column(name="date_history", type="date")
     * @var date
     */
    protected $dateHistory;
    /**
     *
     * @ORM\ManyToOne(targetEntity="NamedEntity")
     * @ORM\JoinColumn(name="entity_id", referencedColumnName="id")
     * @var NamedEntity
     */
    protected $entity;
    /**
     *
     * @ORM\ManyToOne(targetEntity="Currency")
     * @ORM\JoinColumn(name="currency_id", referencedColumnName="id")
     * @var Currency
     */
    protected $currency;
    /**
     *
     * @ORM\Column(name="val", type="decimal", type="decimal", precision=12, scale=5)
     * @var float
     */
    protected $val;
    /**
     *
     * @ORM\Column(name="details", type="text")
     * @var string
     */
    protected $details = '';
    
    public function getDateHistory(): \DateTime {
        return $this->dateHistory;
    }

    public function getEntity(): NamedEntity {
        return $this->entity;
    }

    public function getCurrency(): Currency {
        return $this->currency;
    }

    public function getVal() {
        return $this->val;
    }

    public function getDetails() {
        return $this->details;
    }

    public function setDateHistory(\DateTime $dateHistory) {
        $this->dateHistory = $dateHistory;
        return $this;
    }

    public function setEntity(NamedEntity $entity) {
        $this->entity = $entity;
        return $this;
    }

    public function setCurrency(Currency $currency) {
        $this->currency = $currency;
        return $this;
    }

    public function setVal($val) {
        $this->val = $val;
        return $this;
    }

    public function setDetails($details) {
        $this->details = $details;
        return $this;
    }


}
