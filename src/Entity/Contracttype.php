<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contracttype
 *
 * @ORM\Table(name="ContractType")
 * @ORM\Entity
 */
class Contracttype
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
     * @ORM\Column(name="Name", type="string", length=50, nullable=true)
     */
    private $name;


}
