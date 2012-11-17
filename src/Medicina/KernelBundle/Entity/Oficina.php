<?php

/**
 * @author juan
 */

namespace  Medicina\KernelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * 
 * @ORM\Entity
 * @ORM\Table(name="Oficina")
 */
class Oficina
{
    /**
     * @ORM\Id
     *  @ORM\Column(type="integer") 
     * @ORM\GeneratedValue
     */
    private $id;

    /** @ORM\Column(type="string", nullable=true) */
    private $nombre;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }
}