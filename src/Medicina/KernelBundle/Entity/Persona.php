<?php

/**
 * @author juan
 */

namespace Medicina\KernelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="Persona")
 */
class Persona {

    /**
     * @ORM\Id
     *  @ORM\Column(type="integer") 
     * @ORM\GeneratedValue
     */
    protected $id;

    /** @ORM\Column(type="string") */
    protected $email;

    /** @ORM\Column(type="string") */
    protected $telefono;

    /** @ORM\Column(type="string") */
    protected $nombre;

    /** @ORM\Column(type="string") */
    protected $apellido;

    /** @ORM\Column(type="string") */
    protected $dni;

    /** @ORM\Column(type="string") */
    protected $direccion;

    /** @ORM\Column(type="string") */
    protected $codigoPostal;

//    /** @ORM\OneToMany(targetEntity="Taller\Kernel\KernelBundle\Entity\PersonaCargo" , mappedBy="author_id") */
//    protected $cargosOcupados;
//
//    /** @ORM\ManyToOne(targetEntity="Taller\Kernel\KernelBundle\Entity\Inscripcion") */
//    protected $inscripciones;
//
//    /** @ORM\ManyToOne(targetEntity="Taller\Kernel\KernelBundle\Entity\PersonaAsesora") */
//    protected $asesorias;

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
     * Set codigoPostal
     *
     * @param string $codigoPostal
     */
    public function setCodigoPostal($codigoPostal) {
        $this->codigoPostal = $codigoPostal;
    }

    /**
     * Get codigoPostal
     *
     * @return string 
     */
    public function getCodigoPostal() {
        return $this->codigoPostal;
    }

}