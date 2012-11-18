<?php

namespace Medicina\KernelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medicina\KernelBundle\Entity\Resolucion
 *
 * @ORM\Table(name="resolucion")
 * @ORM\Entity
 */
class Resolucion
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
     * @var date $fecha
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var integer $numero
     *
     * @ORM\Column(name="numero", type="integer", nullable=false)
     */
    private $numero;

    /**
     * @var text $observacion
     *
     * @ORM\Column(name="observacion", type="text", nullable=false)
     */
    private $observacion;

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
     * Set fecha
     *
     * @param date $fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    /**
     * Get fecha
     *
     * @return date 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * Get numero
     *
     * @return integer 
     */
    public function getNumero()
    {
        return $this->numero;
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