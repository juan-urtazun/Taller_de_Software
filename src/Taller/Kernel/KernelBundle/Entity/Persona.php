<?php

/**
 * @author juan
 */

namespace Taller\Kernel\KernelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="Persona")
 */
class Persona {

    protected $id;

    /** @ORM\Column(type="string") */
    protected $email;

    /** @ORM\Column(type="string") */
    protected $telefono;

    /** @ORM\Column(type="string") */
    protected $nombre;

    /** @ORM\Column(type="string") */
    protected $apellido;

    /** @ORM\Column(type="string") */
    protected $dni;

    /** @ORM\Column(type="string") */
    protected $direccion;

    /** @ORM\Column(type="string") */
    protected $codigoPostal;

    /** @ORM\OneToMany(argetEntity="Taller\Kernel\KernelBundle\Entity\PersonaCargo") */
    protected $cargosOcupados;

    /** @ORM\ManyToOne(targetEntity="Taller\Kernel\KernelBundle\Entity\Inscripcion") */
    protected $inscripciones;

    /** @ORM\ManyToOne(targetEntity="Taller\Kernel\KernelBundle\Entity\PersonaAsesora") */
    protected $asesorias;

}

?>
