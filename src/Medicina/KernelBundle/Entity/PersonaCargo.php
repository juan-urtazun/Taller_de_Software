<?php

/**
 * Description of PersonaCargo
 *
 * @author juan
 */

namespace  Medicina\KernelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="PersonaCargo")
 */
class PersonaCargo {

    /**
     * @ORM\Column(type="integer") 
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     *  @ORM\Column(type="boolean"), nullable=true) 
     */
    protected $renueva;

    /**
     *  @ORM\Column(type="datetime"), nullable=false) 
     * 
     *  @Assert\DateTime(message="Debe escribir una fecha valida")
     */
    protected $fecha_inicio;

    /**
     *  @ORM\Column(type="datetime"), nullable=false) 
     * 
     *  @Assert\DateTime(message="Debe escribir una fecha valida") 
     */
    protected $fecha_fin;


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
     * Set renueva
     *
     * @param boolean $renueva
     */
    public function setRenueva($renueva)
    {
        $this->renueva = $renueva;
    }

    /**
     * Get renueva
     *
     * @return boolean 
     */
    public function getRenueva()
    {
        return $this->renueva;
    }

    /**
     * Set fecha_inicio
     *
     * @param datetime $fechaInicio
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fecha_inicio = $fechaInicio;
    }

    /**
     * Get fecha_inicio
     *
     * @return datetime 
     */
    public function getFechaInicio()
    {
        return $this->fecha_inicio;
    }

    /**
     * Set fecha_fin
     *
     * @param datetime $fechaFin
     */
    public function setFechaFin($fechaFin)
    {
        $this->fecha_fin = $fechaFin;
    }

    /**
     * Get fecha_fin
     *
     * @return datetime 
     */
    public function getFechaFin()
    {
        return $this->fecha_fin;
    }
}