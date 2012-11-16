<?php

/**
 * Description of PersonaCargo
 *
 * @author juan
 */

namespace Taller\Kernel\KernelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="PersonaCargo")
 */
class PersonaCargo {

    /**
     * @ORM\Column(type="integer") 
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     *  @ORM\Column(type="boolean"), nullable=true) 
     */
    protected $renueva;

    /**
     *  @ORM\Column(type="datetime"), nullable=false) 
     * 
     *  @Assert\DateTime(message="Debe escribir una fecha valida"
     */
    protected $fecha_inicio;

    /**
     *  @ORM\Column(type="datetime"), nullable=false) 
     * 
     *  @Assert\DateTime(message="Debe escribir una fecha valida") 
     */
    protected $fecha_fin;

}

?>
