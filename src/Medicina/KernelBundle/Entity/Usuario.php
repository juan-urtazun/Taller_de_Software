<?php

/**
 * Description of Usuario
 * @author juan
 */

namespace  Medicina\KernelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="Usuario")
 */
class Usuario {

    /**
     * @ORM\Column(type="integer") 
     * @ORM\GeneratedValue
     */
    protected $id;

    /** @ORM\Column(type="string") */
    protected $username;

    /** @ORM\Column(type="string") */
    protected $password;

    /**
     * @OneToOne(targetEntity="Persona")
     * @JoinColumn(name="persona_id", referencedColumnName="id")
     * */
    protected $persona;

}

?>
