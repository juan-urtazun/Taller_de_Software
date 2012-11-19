<?php

namespace Medicina\KernelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medicina\KernelBundle\Entity\Oficina
 *
 * @ORM\Table(name="oficina")
 * @ORM\Entity
 */
class Oficina
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
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
     */
    private $nombre;

    /**
     * @var Concurso
     *
     * @ORM\ManyToMany(targetEntity="Concurso", mappedBy="oficina")
     */
    private $concurso;

    public function __construct()
    {
        $this->concurso = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombre
     *
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Add concurso
     *
     * @param Medicina\KernelBundle\Entity\Concurso $concurso
     */
    public function addConcurso(\Medicina\KernelBundle\Entity\Concurso $concurso)
    {
        $this->concurso[] = $concurso;
    }

    /**
     * Get concurso
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getConcurso()
    {
        return $this->concurso;
    }
}