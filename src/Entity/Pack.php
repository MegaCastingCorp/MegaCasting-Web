<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pack
 *
 * @ORM\Table(name="Pack")
 * @ORM\Entity
 */
class Pack
{
    /**
     * @var int
     *
     * @ORM\Column(name="Identifier", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $identifier;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Label", type="string", length=150, nullable=true)
     */
    private $label;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Price", type="bigint", nullable=true)
     */
    private $price;


}
