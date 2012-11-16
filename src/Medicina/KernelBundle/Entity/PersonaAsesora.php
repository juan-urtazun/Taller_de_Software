<?php

/**
 * Description of PersonaAsesora
 *
 * @author juan
 */

namespace  Medicina\KernelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="PersonaAsesora")
 */
class PersonaAsesora {

    /**
     * @ORM\Column(type="integer") 
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @OneToOne(targetEntity="Persona")
     * @JoinColumn(name="persona_id", referencedColumnName="id")
     * */ protected $tipo;

}

?>
