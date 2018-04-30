<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ItemRepository")
 */
class Item extends IdEntity
{
    /**
     *
     * @ORM\Column(name="name", type="string")
     * @var string
     */
    protected $name;
    /**
     *
     * @ORM\Column(name="size", type="decimal", precision=12, scale=5)
     * @var float
     */
    protected $size;
    /**
     *
     * @ORM\Column(name="happiness", type="decimal", precision=12, scale=5)
     * @var float
     */
    protected $happiness;
    /**
     *
     * @ORM\Column(name="pollution", type="decimal", precision=12, scale=5)
     * @var float
     */
    protected $pollution;
    /**
     *
     * @ORM\Column(name="firerisk", type="decimal", precision=12, scale=5)
     * @var float
     */
    protected $firerisk;
    /**
     *
     * @ORM\Column(name="hazardness", type="decimal", precision=12, scale=5)
     * @var float
     */
    protected $hazardness;
    /**
     *
     * @ORM\Column(name="universal_start_value", type="decimal", precision=12, scale=5)
     * @var float
     */
    protected $universalStartValue;
    
}
