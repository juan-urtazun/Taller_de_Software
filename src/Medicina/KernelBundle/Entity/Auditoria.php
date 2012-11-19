<?php

namespace Medicina\KernelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medicina\KernelBundle\Entity\Auditoria
 *
 * @ORM\Table(name="auditoria")
 * @ORM\Entity
 */
class Auditoria
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
     * @var string $tablename
     *
     * @ORM\Column(name="tablename", type="string", length=50, nullable=false)
     */
    private $tablename;

    /**
     * @var integer $tuplaId
     *
     * @ORM\Column(name="tupla_id", type="integer", nullable=false)
     */
    private $tuplaId;

    /**
     * @var string $tipoactividad
     *
     * @ORM\Column(name="tipoactividad", type="string", length=1, nullable=false)
     */
    private $tipoactividad;

    /**
     * @var datetime $fecha
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var Usuario
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\OneToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     * })
     */
    private $usuario;



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
     * Set tablename
     *
     * @param string $tablename
     */
    public function setTablename($tablename)
    {
        $this->tablename = $tablename;
    }

    /**
     * Get tablename
     *
     * @return string 
     */
    public function getTablename()
    {
        return $this->tablename;
    }

    /**
     * Set tuplaId
     *
     * @param integer $tuplaId
     */
    public function setTuplaId($tuplaId)
    {
        $this->tuplaId = $tuplaId;
    }

    /**
     * Get tuplaId
     *
     * @return integer 
     */
    public function getTuplaId()
    {
        return $this->tuplaId;
    }

    /**
     * Set tipoactividad
     *
     * @param string $tipoactividad
     */
    public function setTipoactividad($tipoactividad)
    {
        $this->tipoactividad = $tipoactividad;
    }

    /**
     * Get tipoactividad
     *
     * @return string 
     */
    public function getTipoactividad()
    {
        return $this->tipoactividad;
    }

    /**
     * Set fecha
     *
     * @param datetime $fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    /**
     * Get fecha
     *
     * @return datetime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set usuario
     *
     * @param Medicina\KernelBundle\Entity\Usuario $usuario
     */
    public function setUsuario(\Medicina\KernelBundle\Entity\Usuario $usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * Get usuario
     *
     * @return Medicina\KernelBundle\Entity\Usuario 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}