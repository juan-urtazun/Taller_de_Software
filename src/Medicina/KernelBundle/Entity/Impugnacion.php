<?php

namespace Medicina\KernelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medicina\KernelBundle\Entity\Impugnacion
 *
 * @ORM\Table(name="impugnacion")
 * @ORM\Entity
 */
class Impugnacion
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
     * @var datetime $fecharecibida
     *
     * @ORM\Column(name="fechaRecibida", type="datetime", nullable=false)
     */
    private $fecharecibida;

    /**
     * @var text $observacion
     *
     * @ORM\Column(name="observacion", type="text", nullable=true)
     */
    private $observacion;

    /**
     * @var date $fechaExpiracion
     *
     * @ORM\Column(name="fecha_expiracion", type="date", nullable=true)
     */
    private $fechaExpiracion;

    /**
     * @var date $fecharesolucion
     *
     * @ORM\Column(name="fechaResolucion", type="date", nullable=false)
     */
    private $fecharesolucion;

    /**
     * @var Oficina
     *
     * @ORM\ManyToOne(targetEntity="Oficina")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="oficina_id", referencedColumnName="id")
     * })
     */
    private $oficina;



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
     * Set fecharecibida
     *
     * @param datetime $fecharecibida
     */
    public function setFecharecibida($fecharecibida)
    {
        $this->fecharecibida = $fecharecibida;
    }

    /**
     * Get fecharecibida
     *
     * @return datetime 
     */
    public function getFecharecibida()
    {
        return $this->fecharecibida;
    }

    /**
     * Set observacion
     *
     * @param text $observacion
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;
    }

    /**
     * Get observacion
     *
     * @return text 
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set fechaExpiracion
     *
     * @param date $fechaExpiracion
     */
    public function setFechaExpiracion($fechaExpiracion)
    {
        $this->fechaExpiracion = $fechaExpiracion;
    }

    /**
     * Get fechaExpiracion
     *
     * @return date 
     */
    public function getFechaExpiracion()
    {
        return $this->fechaExpiracion;
    }

    /**
     * Set fecharesolucion
     *
     * @param date $fecharesolucion
     */
    public function setFecharesolucion($fecharesolucion)
    {
        $this->fecharesolucion = $fecharesolucion;
    }

    /**
     * Get fecharesolucion
     *
     * @return date 
     */
    public function getFecharesolucion()
    {
        return $this->fecharesolucion;
    }

    /**
     * Set oficina
     *
     * @param Medicina\KernelBundle\Entity\Oficina $oficina
     */
    public function setOficina(\Medicina\KernelBundle\Entity\Oficina $oficina)
    {
        $this->oficina = $oficina;
    }

    /**
     * Get oficina
     *
     * @return Medicina\KernelBundle\Entity\Oficina 
     */
    public function getOficina()
    {
        return $this->oficina;
    }
}