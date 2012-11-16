<?php

namespace Taller\Kernel\KernelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="Resolucion")
 */
class Resolucion {

    /**
     * @ORM\Column(type="integer") 
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

    /** @ORM\ManyToOne(targetEntity="Taller\Kernel\KernelBundle\Entity\Concurso") */
    protected $concurso;

    /** @ORM\ManyToOne(targetEntity="Taller\Kernel\KernelBundle\Entity\Oficina") */
    protected $oficina;

}

?>
