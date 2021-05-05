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

    public function __toString()
    {
        return $this->identifier;
    }

    public function getIdentifier(): ?string
    {
        return $this->identifier;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

}
