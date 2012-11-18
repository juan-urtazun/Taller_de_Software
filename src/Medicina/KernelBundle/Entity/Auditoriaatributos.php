<?php

namespace Medicina\KernelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medicina\KernelBundle\Entity\Auditoriaatributos
 *
 * @ORM\Table(name="auditoriaatributos")
 * @ORM\Entity
 */
class Auditoriaatributos
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
     * @var string $valoranterior
     *
     * @ORM\Column(name="valoranterior", type="string", length=45, nullable=true)
     */
    private $valoranterior;

    /**
     * @var string $valoractual
     *
     * @ORM\Column(name="valoractual", type="string", length=45, nullable=true)
     */
    private $valoractual;

    /**
     * @var string $nombreatributo
     *
     * @ORM\Column(name="nombreatributo", type="string", length=45, nullable=true)
     */
    private $nombreatributo;

    /**
     * @var Auditoria
     *
     * @ORM\ManyToOne(targetEntity="Auditoria")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="auditoria_id", referencedColumnName="id"),
     *   @ORM\JoinColumn(name="auditoria_usuario_id", referencedColumnName="usuario_id")
     * })
     */
    private $auditoria;



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
     * Set valoranterior
     *
     * @param string $valoranterior
     */
    public function setValoranterior($valoranterior)
    {
        $this->valoranterior = $valoranterior;
    }

    /**
     * Get valoranterior
     *
     * @return string 
     */
    public function getValoranterior()
    {
        return $this->valoranterior;
    }

    /**
     * Set valoractual
     *
     * @param string $valoractual
     */
    public function setValoractual($valoractual)
    {
        $this->valoractual = $valoractual;
    }

    /**
     * Get valoractual
     *
     * @return string 
     */
    public function getValoractual()
    {
        return $this->valoractual;
    }

    /**
     * Set nombreatributo
     *
     * @param string $nombreatributo
     */
    public function setNombreatributo($nombreatributo)
    {
        $this->nombreatributo = $nombreatributo;
    }

    /**
     * Get nombreatributo
     *
     * @return string 
     */
    public function getNombreatributo()
    {
        return $this->nombreatributo;
    }

    /**
     * Set auditoria
     *
     * @param Medicina\KernelBundle\Entity\Auditoria $auditoria
     */
    public function setAuditoria(\Medicina\KernelBundle\Entity\Auditoria $auditoria)
    {
        $this->auditoria = $auditoria;
    }

    /**
     * Get auditoria
     *
     * @return Medicina\KernelBundle\Entity\Auditoria 
     */
    public function getAuditoria()
    {
        return $this->auditoria;
    }
}