<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offer
 *
 * @ORM\Table(name="Offer")
 * @ORM\Entity(repositoryClass="App\Repository\OfferRepository")
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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(?string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getPublishdatetime(): ?\DateTimeInterface
    {
        return $this->publishdatetime;
    }

    public function setPublishdatetime(?\DateTimeInterface $publishdatetime): self
    {
        $this->publishdatetime = $publishdatetime;

        return $this;
    }

    public function getDuration(): ?int
    {
        return $this->duration;
    }

    public function setDuration(int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function getStartcontractdate(): ?\DateTimeInterface
    {
        return $this->startcontractdate;
    }

    public function setStartcontractdate(?\DateTimeInterface $startcontractdate): self
    {
        $this->startcontractdate = $startcontractdate;

        return $this;
    }

    public function getPostcount(): ?int
    {
        return $this->postcount;
    }

    public function setPostcount(?int $postcount): self
    {
        $this->postcount = $postcount;

        return $this;
    }

    public function getJobdescription(): ?string
    {
        return $this->jobdescription;
    }

    public function setJobdescription(?string $jobdescription): self
    {
        $this->jobdescription = $jobdescription;

        return $this;
    }

    public function getProfildescription(): ?string
    {
        return $this->profildescription;
    }

    public function setProfildescription(?string $profildescription): self
    {
        $this->profildescription = $profildescription;

        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(?string $street): self
    {
        $this->street = $street;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getZipcode(): ?string
    {
        return $this->zipcode;
    }

    public function setZipcode(?string $zipcode): self
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    public function getIdentifierapply(): ?string
    {
        return $this->identifierapply;
    }

    public function setIdentifierapply(?string $identifierapply): self
    {
        $this->identifierapply = $identifierapply;

        return $this;
    }

    public function getIdentifiercategory(): ?Category
    {
        return $this->identifiercategory;
    }

    public function setIdentifiercategory(?Category $identifiercategory): self
    {
        $this->identifiercategory = $identifiercategory;

        return $this;
    }

    public function getIdentifiercontracttype(): ?Contracttype
    {
        return $this->identifiercontracttype;
    }

    public function setIdentifiercontracttype(?Contracttype $identifiercontracttype): self
    {
        $this->identifiercontracttype = $identifiercontracttype;

        return $this;
    }

    public function getIdentifierfilters(): ?Filtre
    {
        return $this->identifierfilters;
    }

    public function setIdentifierfilters(?Filtre $identifierfilters): self
    {
        $this->identifierfilters = $identifierfilters;

        return $this;
    }

    public function getIdentifierjob(): ?Job
    {
        return $this->identifierjob;
    }

    public function setIdentifierjob(?Job $identifierjob): self
    {
        $this->identifierjob = $identifierjob;

        return $this;
    }

    public function getIdentifierproducer(): ?Producer
    {
        return $this->identifierproducer;
    }

    public function setIdentifierproducer(?Producer $identifierproducer): self
    {
        $this->identifierproducer = $identifierproducer;

        return $this;
    }
}
