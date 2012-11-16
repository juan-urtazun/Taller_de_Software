<?php

/**
 * @author juan
 */

namespace  Medicina\KernelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="Impugnacion")
 */
class Impugnacion {

    /**
     * @ORM\Column(type="integer") 
     * @ORM\GeneratedValue
     */
    protected $id;

    /** @ORM\Column(type="datetime")
     *
     *  @Assert\DateTime(message="Debe escribir una fecha de recepci&oacute;n") 
     */
    protected $fechaRecibida;

    /** @ORM\Column(type="text"), nullable=true) */
    protected $observacion;

    /**
     * @ORM\Column(type="date", nullable=true)
     *
     * @Assert\DateTime(message="Debe escribir una fecha valida") 
     */
    protected $fecha_expiracion;

    /**
     * @ORM\Column(type="date", nullable=true)
     *
     * @Assert\DateTime(message="Debe escribir una fecha valida") 
     */
    protected $fechaResolucion;

//    /** @ORM\ManyToOne(targetEntity="Taller\Kernel\KernelBundle\Entity\Oficina") */
//    protected $oficina;
//
//    /** @ORM\ManyToOne(targetEntity="Taller\Kernel\KernelBundle\Entity\Concurso") */
//    protected $concurso;


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
     * Set fechaRecibida
     *
     * @param datetime $fechaRecibida
     */
    public function setFechaRecibida($fechaRecibida)
    {
        $this->fechaRecibida = $fechaRecibida;
    }

    /**
     * Get fechaRecibida
     *
     * @return datetime 
     */
    public function getFechaRecibida()
    {
        return $this->fechaRecibida;
    }

    /**
     * Set observacion
     *
     * @param text $observacion
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;
    }

    /**
     * Get observacion
     *
     * @return text 
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set fecha_expiracion
     *
     * @param date $fechaExpiracion
     */
    public function setFechaExpiracion($fechaExpiracion)
    {
        $this->fecha_expiracion = $fechaExpiracion;
    }

    /**
     * Get fecha_expiracion
     *
     * @return date 
     */
    public function getFechaExpiracion()
    {
        return $this->fecha_expiracion;
    }

    /**
     * Set fechaResolucion
     *
     * @param date $fechaResolucion
     */
    public function setFechaResolucion($fechaResolucion)
    {
        $this->fechaResolucion = $fechaResolucion;
    }

    /**
     * Get fechaResolucion
     *
     * @return date 
     */
    public function getFechaResolucion()
    {
        return $this->fechaResolucion;
    }
}