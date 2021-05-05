<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Producer
 *
 * @ORM\Table(name="Producer", indexes={@ORM\Index(name="IDX_6E122B8A8806D6C8", columns={"IdentifierPack"})})
 * @ORM\Entity
 */
class Producer
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

    /**
     * @var string|null
     *
     * @ORM\Column(name="UserName", type="string", length=50, nullable=true)
     */
    private $username;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Password", type="string", length=50, nullable=true)
     */
    private $password;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Url", type="string", length=200, nullable=true)
     */
    private $url;

    /**
     * @var \Pack
     *
     * @ORM\ManyToOne(targetEntity="Pack")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdentifierPack", referencedColumnName="Identifier")
     * })
     */
    private $identifierpack;

    public function getIdentifier(): ?string
    {
        return $this->identifier;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(?string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getIdentifierpack(): ?Pack
    {
        return $this->identifierpack;
    }

    public function setIdentifierpack(?Pack $identifierpack): self
    {
        $this->identifierpack = $identifierpack;

        return $this;
    }


}
