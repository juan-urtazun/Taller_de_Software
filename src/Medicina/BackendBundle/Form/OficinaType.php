<?php

namespace Medicina\BackendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

/**
 * Formulario para crear y manipular entidades de tipo Ciudad.
 * Como se utiliza en el backend, el formulario incluye todas las propiedades
 * de la entidad.
 */
class OficinaType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('nombre');
    }

    public function getName()
    {
        return 'medicina_backendbundle_oficinatype';
    }
}
