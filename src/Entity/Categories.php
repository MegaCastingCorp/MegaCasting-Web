<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categories
 *
 * @ORM\Table(name="CATEGORIES")
 * @ORM\Entity
 */
class Categories
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_CAT", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CAT_LABEL", type="string", length=50, nullable=true)
     */
    private $catLabel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="IMG_CAST", type="string", length=2000, nullable=true)
     */
    private $imgCast;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Castings", mappedBy="idCat")
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
