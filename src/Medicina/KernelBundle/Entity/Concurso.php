<?php

namespace Medicina\KernelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medicina\KernelBundle\Entity\Concurso
 *
 * @ORM\Table(name="concurso")
 * @ORM\Entity
 */
class Concurso
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var datetime $fechaInicioExpediente
     *
     * @ORM\Column(name="fecha_inicio_expediente", type="datetime", nullable=false)
     */
    private $fechaInicioExpediente;

    /**
     * @var date $fechaCierre
     *
     * @ORM\Column(name="fecha_cierre", type="date", nullable=true)
     */
    private $fechaCierre;

    /**
     * @var date $fechaInicioInscripcion
     *
     * @ORM\Column(name="fecha_inicio_inscripcion", type="date", nullable=false)
     */
    private $fechaInicioInscripcion;

    /**
     * @var date $fechaEvaluacion
     *
     * @ORM\Column(name="fecha_evaluacion", type="date", nullable=true)
     */
    private $fechaEvaluacion;

    /**
     * @var datetime $fechaEntregaActa
     *
     * @ORM\Column(name="fecha_entrega_acta", type="datetime", nullable=true)
     */
    private $fechaEntregaActa;

    /**
     * @var integer $numeroExpediente
     *
     * @ORM\Column(name="numero_expediente", type="integer", nullable=false)
     */
    private $numeroExpediente;

    /**
     * @var boolean $cerrado
     *
     * @ORM\Column(name="cerrado", type="boolean", nullable=true)
     */
    private $cerrado;

    /**
     * @var Oficina
     *
     * @ORM\ManyToMany(targetEntity="Oficina", inversedBy="concurso")
     * @ORM\JoinTable(name="concursooficina",
     *   joinColumns={
     *     @ORM\JoinColumn(name="concurso_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="oficina_id", referencedColumnName="id")
     *   }
     * )
     */
    private $oficina;

    /**
     * @var Persona
     *
     * @ORM\ManyToMany(targetEntity="Persona", mappedBy="concurso")
     */
    private $persona;

    public function __construct()
    {
        $this->oficina = new \Doctrine\Common\Collections\ArrayCollection();
        $this->persona = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set fechaInicioExpediente
     *
     * @param datetime $fechaInicioExpediente
     */
    public function setFechaInicioExpediente($fechaInicioExpediente)
    {
        $this->fechaInicioExpediente = $fechaInicioExpediente;
    }

    /**
     * Get fechaInicioExpediente
     *
     * @return datetime 
     */
    public function getFechaInicioExpediente()
    {
        return $this->fechaInicioExpediente;
    }

    /**
     * Set fechaCierre
     *
     * @param date $fechaCierre
     */
    public function setFechaCierre($fechaCierre)
    {
        $this->fechaCierre = $fechaCierre;
    }

    /**
     * Get fechaCierre
     *
     * @return date 
     */
    public function getFechaCierre()
    {
        return $this->fechaCierre;
    }

    /**
     * Set fechaInicioInscripcion
     *
     * @param date $fechaInicioInscripcion
     */
    public function setFechaInicioInscripcion($fechaInicioInscripcion)
    {
        $this->fechaInicioInscripcion = $fechaInicioInscripcion;
    }

    /**
     * Get fechaInicioInscripcion
     *
     * @return date 
     */
    public function getFechaInicioInscripcion()
    {
        return $this->fechaInicioInscripcion;
    }

    /**
     * Set fechaEvaluacion
     *
     * @param date $fechaEvaluacion
     */
    public function setFechaEvaluacion($fechaEvaluacion)
    {
        $this->fechaEvaluacion = $fechaEvaluacion;
    }

    /**
     * Get fechaEvaluacion
     *
     * @return date 
     */
    public function getFechaEvaluacion()
    {
        return $this->fechaEvaluacion;
    }

    /**
     * Set fechaEntregaActa
     *
     * @param datetime $fechaEntregaActa
     */
    public function setFechaEntregaActa($fechaEntregaActa)
    {
        $this->fechaEntregaActa = $fechaEntregaActa;
    }

    /**
     * Get fechaEntregaActa
     *
     * @return datetime 
     */
    public function getFechaEntregaActa()
    {
        return $this->fechaEntregaActa;
    }

    /**
     * Set numeroExpediente
     *
     * @param integer $numeroExpediente
     */
    public function setNumeroExpediente($numeroExpediente)
    {
        $this->numeroExpediente = $numeroExpediente;
    }

    /**
     * Get numeroExpediente
     *
     * @return integer 
     */
    public function getNumeroExpediente()
    {
        return $this->numeroExpediente;
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

    /**
     * Add oficina
     *
     * @param Medicina\KernelBundle\Entity\Oficina $oficina
     */
    public function addOficina(\Medicina\KernelBundle\Entity\Oficina $oficina)
    {
        $this->oficina[] = $oficina;
    }

    /**
     * Get oficina
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getOficina()
    {
        return $this->oficina;
    }

    /**
     * Add persona
     *
     * @param Medicina\KernelBundle\Entity\Persona $persona
     */
    public function addPersona(\Medicina\KernelBundle\Entity\Persona $persona)
    {
        $this->persona[] = $persona;
    }

    /**
     * Get persona
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getPersona()
    {
        return $this->persona;
    }
}