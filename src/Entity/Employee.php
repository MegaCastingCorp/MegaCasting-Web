<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Employee
 *
 * @ORM\Table(name="Employee", indexes={@ORM\Index(name="IDX_A4E917F799AE34AF", columns={"IdentifierGender"})})
 * @ORM\Entity
 */
class Employee
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
     * @ORM\Column(name="Username", type="string", length=150, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="Password", type="string", length=200, nullable=false)
     */
    private $password;

    /**
     * @var bool
     *
     * @ORM\Column(name="Admin", type="boolean", nullable=false)
     */
    private $admin;

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
