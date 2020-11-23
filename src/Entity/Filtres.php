<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Filtres
 *
 * @ORM\Table(name="FILTRES")
 * @ORM\Entity
 */
class Filtres
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_FILTRE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFiltre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CAT_LABEL", type="string", length=50, nullable=true)
     */
    private $catLabel;

    /**
     * @var string
     *
     * @ORM\Column(name="LABEL_FILTRE", type="string", length=75, nullable=false)
     */
    private $labelFiltre;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Castings", mappedBy="idFiltre")
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
