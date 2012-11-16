<?php

/**
 * @author juan
 */

namespace Taller\Kernel\KernelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity
 * @ORM\Table(name="Cargo")
 */
class Cargo {

    /** @ORM\Column(type="integer") 
     * @ORM\GeneratedValue
     */
    protected $id;

    /** @ORM\Column(type="string") */
    protected $codigo;

    /** @ORM\ManyToOne(targetEntity="Taller\Kernel\KernelBundle\Entity\Dedicacion") */
    protected $dedicacion;

    /** @ORM\ManyToOne(targetEntity="Taller\Kernel\KernelBundle\Entity\TipoDeCargo") */
    protected $tipoCargo;

    /** @ORM\ManyToOne(targetEntity="Taller\Kernel\KernelBundle\Entity\Catedra") */
    protected $catedra;
   
    /**
     * @ManyToMany(targetEntity="Taller\Kernel\KernelBundle\Entity\Concurso", mappedBy="cargos")
     * */
    protected $concursos;

}

?>
