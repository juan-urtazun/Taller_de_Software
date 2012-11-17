<?php

namespace Medicina\KernelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="Resolucion")
 */
class Resolucion {

    /**
     * @ORM\Id
     *  @ORM\Column(type="integer") 
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @ORM\Column(type="date", nullable=true)
     *
     * @Assert\DateTime(message="Debe escribir una fecha valida") 
     */
    protected $fecha;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="Debe escribir un n&uacute;mero")
     */
    protected $numero;

    /** @ORM\Column(type="text"), nullable=true) */
    protected $observacion;

//
//    /** @ORM\ManyToOne(targetEntity="Taller\Kernel\KernelBundle\Entity\Concurso") */
//    protected $concurso;
//
//    /** @ORM\ManyToOne(targetEntity="Taller\Kernel\KernelBundle\Entity\Oficina") */
//    protected $oficina;

    /**
     * Set id
     *
     * @param integer $id
     */
    public function setId($id) {
        $this->id = $id;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set fecha
     *
     * @param date $fecha
     */
    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    /**
     * Get fecha
     *
     * @return date 
     */
    public function getFecha() {
        return $this->fecha;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     */
    public function setNumero($numero) {
        $this->numero = $numero;
    }

    /**
     * Get numero
     *
     * @return integer 
     */
    public function getNumero() {
        return $this->numero;
    }

    /**
     * Set observacion
     *
     * @param text $observacion
     */
    public function setObservacion($observacion) {
        $this->observacion = $observacion;
    }

    /**
     * Get observacion
     *
     * @return text 
     */
    public function getObservacion() {
        return $this->observacion;
    }

}