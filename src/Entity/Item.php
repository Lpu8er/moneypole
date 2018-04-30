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
     * @ORM\Column(name="size", type="decimal")
     * @var float
     */
    protected $size;
    /**
     *
     * @ORM\Column(name="happiness", type="decimal")
     * @var float
     */
    protected $happiness;
    /**
     *
     * @ORM\Column(name="pollution", type="decimal")
     * @var float
     */
    protected $pollution;
    /**
     *
     * @ORM\Column(name="firerisk", type="decimal")
     * @var float
     */
    protected $firerisk;
    /**
     *
     * @ORM\Column(name="hazardness", type="decimal")
     * @var float
     */
    protected $hazardness;
    /**
     *
     * @ORM\Column(name="universal_start_value", type="decimal")
     * @var float
     */
    protected $universalStartValue;
    
}
