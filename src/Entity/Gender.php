<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gender
 *
 * @ORM\Table(name="Gender", uniqueConstraints={@ORM\UniqueConstraint(name="PK_Gender", columns={"Identifier"})})
 * @ORM\Entity
 */
class Gender
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
     * @var string
     *
     * @ORM\Column(name="Label", type="string", length=50, nullable=false)
     */
    private $label;


}
