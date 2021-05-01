<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offer
 *
 * @ORM\Table(name="Offer", indexes={@ORM\Index(name="IDX_E817A83A2CFDD722", columns={"IdentifierCategory"}), @ORM\Index(name="IDX_E817A83AB0E4728C", columns={"IdentifierContractType"}), @ORM\Index(name="IDX_E817A83AA6921076", columns={"IdentifierFilters"}), @ORM\Index(name="IDX_E817A83AF9D3652B", columns={"IdentifierJob"}), @ORM\Index(name="IDX_E817A83ABDD5873F", columns={"IdentifierProducer"})})
 * @ORM\Entity
 */
class Offer
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $identifier;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=50, nullable=false)
     */
    public $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Reference", type="string", length=50, nullable=true)
     */
    private $reference;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="PublishDateTime", type="datetime", nullable=true)
     */
    public $publishdatetime;

    /**
     * @var int
     *
     * @ORM\Column(name="Duration", type="integer", nullable=false)
     */
    private $duration;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="StartContractDate", type="date", nullable=true)
     */
    public $startcontractdate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PostCount", type="integer", nullable=true)
     */
    public $postcount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="JobDescription", type="string", length=2000, nullable=true)
     */
    public $jobdescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ProfilDescription", type="string", length=2000, nullable=true)
     */
    private $profildescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Street", type="string", length=70, nullable=true)
     */
    private $street;

    /**
     * @var string|null
     *
     * @ORM\Column(name="City", type="string", length=50, nullable=true)
     */
    private $city;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ZipCode", type="string", length=10, nullable=true, options={"fixed"=true})
     */
    private $zipcode;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IdentifierApply", type="bigint", nullable=true)
     */
    private $identifierapply;

    /**
     * @var \Apply
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Apply")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Identifier", referencedColumnName="IdentifierOffer")
     * })
     */
    //public $identifier;

    /**
     * @var \Category
     *
     * @ORM\ManyToOne(targetEntity="Category")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdentifierCategory", referencedColumnName="Identifier")
     * })
     */
    public $identifiercategory;

    /**
     * @var \Contracttype
     *
     * @ORM\ManyToOne(targetEntity="Contracttype")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdentifierContractType", referencedColumnName="Identifier")
     * })
     */
    private $identifiercontracttype;

    /**
     * @var \Filtre
     *
     * @ORM\ManyToOne(targetEntity="Filtre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdentifierFilters", referencedColumnName="Identifier")
     * })
     */
    private $identifierfilters;

    /**
     * @var \Job
     *
     * @ORM\ManyToOne(targetEntity="Job")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdentifierJob", referencedColumnName="Identifier")
     * })
     */
    private $identifierjob;

    /**
     * @var \Producer
     *
     * @ORM\ManyToOne(targetEntity="Producer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdentifierProducer", referencedColumnName="Identifier")
     * })
     */
    private $identifierproducer;

    public function getIdentifier(): ?int
    {
        return $this->identifier;
    }
}
