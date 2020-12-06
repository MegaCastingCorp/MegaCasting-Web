<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Apply
 *
 * @ORM\Table(name="Apply", indexes={@ORM\Index(name="IDX_7CEEA31B23444691", columns={"IdentifierUsers"})})
 * @ORM\Entity
 */
class Apply
{
    /**
     * @var int
     *
     * @ORM\Column(name="IdentifierOffer", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $identifieroffer;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdentifierUsers", referencedColumnName="Identifier")
     * })
     */
    private $identifierusers;


}
