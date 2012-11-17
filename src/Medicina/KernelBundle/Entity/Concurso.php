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
 * @ORM\Table(name="Concurso")
 */
class Concurso {



/**
 *  @ORM\Id
 *  @ORM\Column(type="integer") 
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
//
///**
// * @ORM\ManyToMany(targetEntity="Taller\Kernel\KernelBundle\Entity\Cargo", inversedBy="concursos")
// * @ORM\JoinTable(name="cargos_concursos")
// */
//protected $cargos;


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
     * Set fecha_inicio_expediente
     *
     * @param datetime $fechaInicioExpediente
     */
    public function setFechaInicioExpediente($fechaInicioExpediente)
    {
        $this->fecha_inicio_expediente = $fechaInicioExpediente;
    }

    /**
     * Get fecha_inicio_expediente
     *
     * @return datetime 
     */
    public function getFechaInicioExpediente()
    {
        return $this->fecha_inicio_expediente;
    }

    /**
     * Set fecha_cierre
     *
     * @param date $fechaCierre
     */
    public function setFechaCierre($fechaCierre)
    {
        $this->fecha_cierre = $fechaCierre;
    }

    /**
     * Get fecha_cierre
     *
     * @return date 
     */
    public function getFechaCierre()
    {
        return $this->fecha_cierre;
    }

    /**
     * Set fecha_inicio_inscripcion
     *
     * @param date $fechaInicioInscripcion
     */
    public function setFechaInicioInscripcion($fechaInicioInscripcion)
    {
        $this->fecha_inicio_inscripcion = $fechaInicioInscripcion;
    }

    /**
     * Get fecha_inicio_inscripcion
     *
     * @return date 
     */
    public function getFechaInicioInscripcion()
    {
        return $this->fecha_inicio_inscripcion;
    }

    /**
     * Set fecha_evaluacion
     *
     * @param date $fechaEvaluacion
     */
    public function setFechaEvaluacion($fechaEvaluacion)
    {
        $this->fecha_evaluacion = $fechaEvaluacion;
    }

    /**
     * Get fecha_evaluacion
     *
     * @return date 
     */
    public function getFechaEvaluacion()
    {
        return $this->fecha_evaluacion;
    }

    /**
     * Set fecha_entrega_acta
     *
     * @param datetime $fechaEntregaActa
     */
    public function setFechaEntregaActa($fechaEntregaActa)
    {
        $this->fecha_entrega_acta = $fechaEntregaActa;
    }

    /**
     * Get fecha_entrega_acta
     *
     * @return datetime 
     */
    public function getFechaEntregaActa()
    {
        return $this->fecha_entrega_acta;
    }

    /**
     * Set numero_expediente
     *
     * @param integer $numeroExpediente
     */
    public function setNumeroExpediente($numeroExpediente)
    {
        $this->numero_expediente = $numeroExpediente;
    }

    /**
     * Get numero_expediente
     *
     * @return integer 
     */
    public function getNumeroExpediente()
    {
        return $this->numero_expediente;
    }

    /**
     * Set cerrado
     *
     * @param boolean $cerrado
     */
    public function setCerrado($cerrado)
    {
        $this->cerrado = $cerrado;
    }

    /**
     * Get cerrado
     *
     * @return boolean 
     */
    public function getCerrado()
    {
        return $this->cerrado;
    }
}