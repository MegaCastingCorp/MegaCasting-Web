<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pack
 *
 * @ORM\Table(name="PACK")
 * @ORM\Entity
 */
class Pack
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_PACK", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPack;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NAME_PACK", type="string", length=50, nullable=true)
     */
    private $namePack;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PRICE", type="integer", nullable=true)
     */
    private $price;


}
