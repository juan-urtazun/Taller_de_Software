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

    /** @ORM\ManyToOne(targetEntity="Taller\Kernel\KernelBundle\Entity\Oficina") */
    protected $oficina;

    /** @ORM\ManyToOne(targetEntity="Taller\Kernel\KernelBundle\Entity\Concurso") */
    protected $concurso;

}

?>
