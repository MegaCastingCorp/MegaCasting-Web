<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="Users", uniqueConstraints={@ORM\UniqueConstraint(name="FK_Users", columns={"Identifier"})}, indexes={@ORM\Index(name="IDX_D5428AED99AE34AF", columns={"IdentifierGender"})})
 * @ORM\Entity
 */
class Users
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
     * @ORM\Column(name="Firstname", type="string", length=150, nullable=true)
     */
    private $firstname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Lastname", type="string", length=150, nullable=true)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="Username", type="string", length=50, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="Password", type="string", length=50, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=200, nullable=false)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="BirthDate", type="date", nullable=false)
     */
    private $birthdate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Avatar", type="string", length=2000, nullable=true)
     */
    private $avatar;

    /**
     * @var \Gender
     *
     * @ORM\ManyToOne(targetEntity="Gender")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdentifierGender", referencedColumnName="Identifier")
     * })
     */
    private $identifiergender;


}
