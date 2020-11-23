<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Employee
 *
 * @ORM\Table(name="EMPLOYEE", indexes={@ORM\Index(name="IDX_9BACE9ED7365E708", columns={"ID_CIVILITE"})})
 * @ORM\Entity
 */
class Employee
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_EMPLOYEE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEmployee;

    /**
     * @var string
     *
     * @ORM\Column(name="EMPLOYEE_FIRSTNAME", type="string", length=100, nullable=false)
     */
    private $employeeFirstname;

    /**
     * @var string
     *
     * @ORM\Column(name="EMPLOYEE_LASTNAME", type="string", length=100, nullable=false)
     */
    private $employeeLastname;

    /**
     * @var string
     *
     * @ORM\Column(name="EMPLOYEE_USERNAME", type="string", length=150, nullable=false)
     */
    private $employeeUsername;

    /**
     * @var string
     *
     * @ORM\Column(name="EMPLOYEE_PASSWORD", type="string", length=175, nullable=false)
     */
    private $employeePassword;

    /**
     * @var bool
     *
     * @ORM\Column(name="EST_ADMIN", type="boolean", nullable=false)
     */
    private $estAdmin;

    /**
     * @var \Civilite
     *
     * @ORM\ManyToOne(targetEntity="Civilite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_CIVILITE", referencedColumnName="ID_CIVILITE")
     * })
     */
    private $idCivilite;


}
