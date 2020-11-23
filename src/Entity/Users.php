<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="USERS", indexes={@ORM\Index(name="IDX_E3D767597365E708", columns={"ID_CIVILITE"})})
 * @ORM\Entity
 */
class Users
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_USER", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="USER_FIRSTNAME", type="string", length=100, nullable=true)
     */
    private $userFirstname;

    /**
     * @var string
     *
     * @ORM\Column(name="USER_LASTNAME", type="string", length=100, nullable=false)
     */
    private $userLastname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="USERNAME", type="string", length=50, nullable=true)
     */
    private $username;

    /**
     * @var string|null
     *
     * @ORM\Column(name="USER_PASSWORD", type="string", length=100, nullable=true)
     */
    private $userPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="USER_MAIL", type="string", length=1000, nullable=false)
     */
    private $userMail;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="USER_NAISSANCE", type="date", nullable=false)
     */
    private $userNaissance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="IMG_PROFIL", type="string", length=2000, nullable=true)
     */
    private $imgProfil;

    /**
     * @var \Civilite
     *
     * @ORM\ManyToOne(targetEntity="Civilite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_CIVILITE", referencedColumnName="ID_CIVILITE")
     * })
     */
    private $idCivilite;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Castings", mappedBy="idUser")
     */
    private $idCasting;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idCasting = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
