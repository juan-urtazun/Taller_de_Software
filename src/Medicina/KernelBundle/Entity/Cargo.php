<?php

/**
 * @author juan
 */

namespace  Medicina\KernelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity
 * @ORM\Table(name="Cargo")
 */
class Cargo {

    /**
     * @ORM\Id
     *  @ORM\Column(type="integer") 
     * @ORM\GeneratedValue
     */
    protected $id;

    /** @ORM\Column(type="string") */
    protected $codigo;
//
//    /** @ORM\ManyToOne(targetEntity="Taller\Kernel\KernelBundle\Entity\Dedicacion") */
//    protected $dedicacion;
//
//    /** @ORM\ManyToOne(targetEntity="Taller\Kernel\KernelBundle\Entity\TipoDeCargo") */
//    protected $tipoCargo;
//
//    /** @ORM\ManyToOne(targetEntity="Taller\Kernel\KernelBundle\Entity\Catedra") */
//    protected $catedra;
//   
//    /**
//     * @ManyToMany(targetEntity="Taller\Kernel\KernelBundle\Entity\Concurso", mappedBy="cargos")
//     * */
//    protected $concursos;


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
}