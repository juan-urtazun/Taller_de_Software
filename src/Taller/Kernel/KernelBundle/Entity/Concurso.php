<?php
/**
 * @author juan
 */


namespace Taller\Kernel\KernelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity
 * @ORM\Table(name="Concurso")
 */
class Concurso {



/** @ORM\Column(type="integer") 
 * @ORM\GeneratedValue
 */
protected $id;
/** @ORM\Column(type="datetime")*/
protected $fecha_inicio_expediente;
/** @ORM\Column(type="date"), nullable=true)*/
protected $fecha_cierre;
/** @ORM\Column(type="date"), nullable=true)*/
protected $fecha_inicio_inscripcion;
/** @ORM\Column(type="date"), nullable=true)*/
protected $fecha_evaluacion;
/** @ORM\Column(type="datetime"), nullable=true) */
protected $fecha_entrega_acta;
/** @ORM\Column(type="integer") */
protected $numero_expediente;
/** @ORM\Column(type="boolean"), nullable=true) */
protected $cerrado;

/**
 * @ORM\ManyToMany(targetEntity="Taller\Kernel\KernelBundle\Entity\Cargo", inversedBy="concursos")
 * @ORM\JoinTable(name="cargos_concursos")
 */
protected $cargos;

}
?>
