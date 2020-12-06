<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jobtype
 *
 * @ORM\Table(name="JobType")
 * @ORM\Entity
 */
class Jobtype
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
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=50, nullable=false)
     */
    private $name;


}
