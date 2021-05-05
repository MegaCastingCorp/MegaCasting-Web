<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Filtre
 *
 * @ORM\Table(name="Filtre")
 * @ORM\Entity
 */
class Filtre
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
     * @ORM\Column(name="Label", type="string", length=30, nullable=true)
     */
    private $label;

    public function getIdentifier(): ?string
    {
        return $this->identifier;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(?string $label): self
    {
        $this->label = $label;

        return $this;
    }


}
