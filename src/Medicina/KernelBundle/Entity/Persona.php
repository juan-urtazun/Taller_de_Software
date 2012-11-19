<?php

namespace Medicina\KernelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medicina\KernelBundle\Entity\Persona
 *
 * @ORM\Table(name="persona")
 * @ORM\Entity
 */
class Persona {

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string $telefono
     *
     * @ORM\Column(name="telefono", type="string", length=255, nullable=false)
     */
    private $telefono;

    /**
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
     */
    private $nombre;

    /**
     * @var string $apellido
     *
     * @ORM\Column(name="apellido", type="string", length=255, nullable=false)
     */
    private $apellido;

    /**
     * @var string $dni
     *
     * @ORM\Column(name="dni", type="string", length=255, nullable=false)
     */
    private $dni;

    /**
     * @var string $direccion
     *
     * @ORM\Column(name="direccion", type="string", length=255, nullable=false)
     */
    private $direccion;

    /**
     * @var string $codigopostal
     *
     * @ORM\Column(name="codigoPostal", type="string", length=255, nullable=false)
     */
    private $codigopostal;

    /**
     * @var Concurso
     *
     * @ORM\ManyToMany(targetEntity="Concurso", inversedBy="persona")
     * @ORM\JoinTable(name="inscripcion",
     *   joinColumns={
     *     @ORM\JoinColumn(name="persona_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="concurso_id", referencedColumnName="id")
     *   }
     * )
     */
    private $concurso;

    /**
     * @var Cargo
     *
     * @ORM\ManyToMany(targetEntity="Cargo", inversedBy="persona")
     * @ORM\JoinTable(name="personacargo",
     *   joinColumns={
     *     @ORM\JoinColumn(name="persona_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="cargo_id", referencedColumnName="id")
     *   }
     * )
     */
    private $cargo;

    public function __construct() {
        $this->concurso = new \Doctrine\Common\Collections\ArrayCollection();
        $this->cargo = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email) {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     */
    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono() {
        return $this->telefono;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     */
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre() {
        return $this->nombre;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     */
    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido() {
        return $this->apellido;
    }

    /**
     * Set dni
     *
     * @param string $dni
     */
    public function setDni($dni) {
        $this->dni = $dni;
    }

    /**
     * Get dni
     *
     * @return string 
     */
    public function getDni() {
        return $this->dni;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     */
    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion() {
        return $this->direccion;
    }

    /**
     * Set codigopostal
     *
     * @param string $codigopostal
     */
    public function setCodigopostal($codigopostal) {
        $this->codigopostal = $codigopostal;
    }

    /**
     * Get codigopostal
     *
     * @return string 
     */
    public function getCodigopostal() {
        return $this->codigopostal;
    }

    /**
     * Add concurso
     *
     * @param Medicina\KernelBundle\Entity\Concurso $concurso
     */
    public function addConcurso(\Medicina\KernelBundle\Entity\Concurso $concurso) {
        $this->concurso[] = $concurso;
    }

    /**
     * Get concurso
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getConcurso() {
        return $this->concurso;
    }

    /**
     * Add cargo
     *
     * @param Medicina\KernelBundle\Entity\Cargo $cargo
     */
    public function addCargo(\Medicina\KernelBundle\Entity\Cargo $cargo) {
        $this->cargo[] = $cargo;
    }

    /**
     * Get cargo
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getCargo() {
        return $this->cargo;
    }
    public function getNombreYApellido() {
        return $this->getApellido(). " " .$this->getNombre();
    }

    public function __toString() {
        return $this->getNombreYApellido();
    }

}