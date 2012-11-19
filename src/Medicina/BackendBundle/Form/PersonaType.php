<?php

namespace Medicina\BackendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class PersonaType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('email')
            ->add('telefono')
            ->add('nombre')
            ->add('apellido')
            ->add('dni')
            ->add('direccion')
            ->add('codigopostal', 'text' ,array('label' =>'Codigo Postal') )           
        ;
    }

    public function getName()
    {
        return 'medicina_backendbundle_personatype';
    }
}
