<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Castings
 *
 * @ORM\Table(name="CASTINGS")
 * @ORM\Entity
 */
class Castings
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_CASTING", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCasting;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LABEL", type="string", length=50, nullable=true)
     */
    private $label;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DOM_METIERS", type="string", length=50, nullable=true)
     */
    private $domMetiers;

    /**
     * @var string
     *
     * @ORM\Column(name="METIERS", type="string", length=50, nullable=false)
     */
    private $metiers;

    /**
     * @var string
     *
     * @ORM\Column(name="TYPE_CONTRACT", type="string", length=50, nullable=false)
     */
    private $typeContract;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DUREE_DIFFUSION", type="integer", nullable=true)
     */
    private $dureeDiffusion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_DEB_CONTRACT", type="datetime", nullable=false)
     */
    private $dateDebContract;

    /**
     * @var int
     *
     * @ORM\Column(name="NB_POSTES", type="integer", nullable=false)
     */
    private $nbPostes;

    /**
     * @var string
     *
     * @ORM\Column(name="LOCALISATION", type="string", length=50, nullable=false)
     */
    private $localisation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DESC_POSTE", type="text", length=16, nullable=true)
     */
    private $descPoste;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DESC_PROFIL", type="text", length=16, nullable=true)
     */
    private $descProfil;

    /**
     * @var string|null
     *
     * @ORM\Column(name="COORDONNEES", type="string", length=50, nullable=true)
     */
    private $coordonnees;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Filtres", inversedBy="idCasting")
     * @ORM\JoinTable(name="appartenir_filtre",
     *   joinColumns={
     *     @ORM\JoinColumn(name="ID_CASTING", referencedColumnName="ID_CASTING")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="ID_FILTRE", referencedColumnName="ID_FILTRE")
     *   }
     * )
     */
    private $idFiltre;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Categories", inversedBy="idCasting")
     * @ORM\JoinTable(name="appartient_casting",
     *   joinColumns={
     *     @ORM\JoinColumn(name="ID_CASTING", referencedColumnName="ID_CASTING")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="ID_CAT", referencedColumnName="ID_CAT")
     *   }
     * )
     */
    private $idCat;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Users", inversedBy="idCasting")
     * @ORM\JoinTable(name="postuler",
     *   joinColumns={
     *     @ORM\JoinColumn(name="ID_CASTING", referencedColumnName="ID_CASTING")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="ID_USER", referencedColumnName="ID_USER")
     *   }
     * )
     */
    private $idUser;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idFiltre = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idCat = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idUser = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
