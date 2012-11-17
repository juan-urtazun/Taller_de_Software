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
 * @ORM\Table(name="Catedra")
 */
class Catedra {

    /**
     * @ORM\Id
     *  @ORM\Column(type="integer") 
     * @ORM\GeneratedValue
     */
    protected $id;

    /** @ORM\Column(type="string", nullable=true) */
    protected $codigo;

    /** @ORM\Column(type="string") */
    protected $nombre;
    
    protected $cargo;


    
    /**
     * Set id
     *
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

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
     * Set codigo
     *
     * @param string $codigo
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
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