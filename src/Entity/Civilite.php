<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Civilite
 *
 * @ORM\Table(name="CIVILITE")
 * @ORM\Entity
 */
class Civilite
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_CIVILITE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCivilite;

    /**
     * @var string
     *
     * @ORM\Column(name="LABEL_CIVILITE", type="string", length=50, nullable=false)
     */
    private $labelCivilite;


}
