<?php

namespace Medicina\KernelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medicina\KernelBundle\Entity\Cargo
 *
 * @ORM\Table(name="cargo")
 * @ORM\Entity
 */
class Cargo
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
     * @var string $codigo
     *
     * @ORM\Column(name="codigo", type="string", length=255, nullable=false)
     */
    private $codigo;

    /**
     * @var integer $consursoId
     *
     * @ORM\Column(name="consurso_id", type="integer", nullable=true)
     */
    private $consursoId;

    /**
     * @var string $tipoDeDedicacion
     *
     * @ORM\Column(name="tipo_de_dedicacion", type="string", length=255, nullable=true)
     */
    private $tipoDeDedicacion;

    /**
     * @var Persona
     *
     * @ORM\ManyToMany(targetEntity="Persona", mappedBy="cargo")
     */
    private $persona;

    /**
     * @var Catedra
     *
     * @ORM\ManyToOne(targetEntity="Catedra")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="catedra_id", referencedColumnName="id")
     * })
     */
    private $catedra;

    /**
     * @var Tipodecargo
     *
     * @ORM\ManyToOne(targetEntity="Tipodecargo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipodecargo_id", referencedColumnName="id")
     * })
     */
    private $tipodecargo;

    public function __construct()
    {
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

    /**
     * Set consursoId
     *
     * @param integer $consursoId
     */
    public function setConsursoId($consursoId)
    {
        $this->consursoId = $consursoId;
    }

    /**
     * Get consursoId
     *
     * @return integer 
     */
    public function getConsursoId()
    {
        return $this->consursoId;
    }

    /**
     * Set tipoDeDedicacion
     *
     * @param string $tipoDeDedicacion
     */
    public function setTipoDeDedicacion($tipoDeDedicacion)
    {
        $this->tipoDeDedicacion = $tipoDeDedicacion;
    }

    /**
     * Get tipoDeDedicacion
     *
     * @return string 
     */
    public function getTipoDeDedicacion()
    {
        return $this->tipoDeDedicacion;
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

    /**
     * Set catedra
     *
     * @param Medicina\KernelBundle\Entity\Catedra $catedra
     */
    public function setCatedra(\Medicina\KernelBundle\Entity\Catedra $catedra)
    {
        $this->catedra = $catedra;
    }

    /**
     * Get catedra
     *
     * @return Medicina\KernelBundle\Entity\Catedra 
     */
    public function getCatedra()
    {
        return $this->catedra;
    }

    /**
     * Set tipodecargo
     *
     * @param Medicina\KernelBundle\Entity\Tipodecargo $tipodecargo
     */
    public function setTipodecargo(\Medicina\KernelBundle\Entity\Tipodecargo $tipodecargo)
    {
        $this->tipodecargo = $tipodecargo;
    }

    /**
     * Get tipodecargo
     *
     * @return Medicina\KernelBundle\Entity\Tipodecargo 
     */
    public function getTipodecargo()
    {
        return $this->tipodecargo;
    }
}