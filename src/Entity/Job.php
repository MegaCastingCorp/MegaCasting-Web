<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Job
 *
 * @ORM\Table(name="Job", indexes={@ORM\Index(name="IDX_C395A6187BB70587", columns={"IdentifierJobType"})})
 * @ORM\Entity
 */
class Job
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
     * @ORM\Column(name="Name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var \Jobtype
     *
     * @ORM\ManyToOne(targetEntity="Jobtype")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdentifierJobType", referencedColumnName="Identifier")
     * })
     */
    private $identifierjobtype;

    public function getIdentifier(): ?string
    {
        return $this->identifier;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getIdentifierjobtype(): ?Jobtype
    {
        return $this->identifierjobtype;
    }

    public function setIdentifierjobtype(?Jobtype $identifierjobtype): self
    {
        $this->identifierjobtype = $identifierjobtype;

        return $this;
    }


}
