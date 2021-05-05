<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Users
 *
 * @ORM\Table(name="Users", uniqueConstraints={@ORM\UniqueConstraint(name="FK_Users", columns={"Identifier"})}, indexes={@ORM\Index(name="IDX_D5428AED99AE34AF", columns={"IdentifierGender"})})
 * @ORM\Entity(repositoryClass=UsersRepository::class)
 */
class Users implements UserInterface
{
    private $role = ['ROLE_USER'];

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
     * @ORM\Column(name="Firstname", type="string", length=150, nullable=true)
     */
    public $firstname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Lastname", type="string", length=150, nullable=true)
     */
    public $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="Username", type="string", length=50, nullable=false)
     */
    public $username;

    /**
     * @var string
     *
     * @ORM\Column(name="Password", type="string", length=50, nullable=false)
     */
    public $password;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=200, nullable=false)
     */
    public $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="BirthDate", type="date", nullable=false)
     */
    public $birthdate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Avatar", type="string", length=2000, nullable=true)
     */
    public $avatar;

    /**
     * @var \Gender
     *
     * @ORM\ManyToOne(targetEntity="Gender")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdentifierGender", referencedColumnName="Identifier")
     * })
     */
    public $identifiergender;

    public function getIdentifier(): ?string
    {
        return $this->identifier;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(?string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(?string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getBirthdate(): ?\DateTimeInterface
    {
        return $this->birthdate;
    }

    public function setBirthdate(\DateTimeInterface $birthdate): self
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    public function setAvatar(?string $avatar): self
    {
        $this->avatar = $avatar;

        return $this;
    }

    public function getIdentifiergender(): ?Gender
    {
        return $this->identifiergender;
    }

    public function setIdentifiergender(?Gender $identifiergender): self
    {
        $this->identifiergender = $identifiergender;

        return $this;
    }

    /**
     * Returns the roles granted to the user.
     *
     *     public function getRoles()
     *     {
     *         return ['ROLE_USER'];
     *     }
     *
     * Alternatively, the roles might be stored on a ``roles`` property,
     * and populated in any number of different ways when the user object
     * is created.
     *
     * @return string[] The user roles
     */
    public function getRoles()
    {
        return $role;
    }

    /**
     * Returns the salt that was originally used to hash the password.
     *
     * This can return null if the password was not hashed using a salt.
     *
     * This method is deprecated since Symfony 5.3, implement it from {@link LegacyPasswordAuthenticatedUserInterface} instead.
     *
     * @return string|null The salt
     */
    public function getSalt()
    {
        return null;
    }

    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials()
    {
    }

}
