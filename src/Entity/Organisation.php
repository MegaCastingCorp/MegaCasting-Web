<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Organisation
 *
 * @ORM\Table(name="ORGANISATION", indexes={@ORM\Index(name="IDX_73D37BA4FD6F6C49", columns={"ID_CASTING"}), @ORM\Index(name="IDX_73D37BA4E27A933F", columns={"ID_PACK"})})
 * @ORM\Entity
 */
class Organisation
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_ORG", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrg;

    /**
     * @var string
     *
     * @ORM\Column(name="NAME_ORG", type="string", length=150, nullable=false)
     */
    private $nameOrg;

    /**
     * @var string
     *
     * @ORM\Column(name="URL_ORG", type="string", length=1000, nullable=false)
     */
    private $urlOrg;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EMAIL_ORG", type="string", length=100, nullable=true)
     */
    private $emailOrg;

    /**
     * @var string
     *
     * @ORM\Column(name="TEL_ORG", type="string", length=50, nullable=false)
     */
    private $telOrg;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ADRESS_ORG", type="string", length=100, nullable=true)
     */
    private $adressOrg;

    /**
     * @var \Castings
     *
     * @ORM\ManyToOne(targetEntity="Castings")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_CASTING", referencedColumnName="ID_CASTING")
     * })
     */
    private $idCasting;

    /**
     * @var \Pack
     *
     * @ORM\ManyToOne(targetEntity="Pack")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_PACK", referencedColumnName="ID_PACK")
     * })
     */
    private $idPack;


}
