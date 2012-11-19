<?php

namespace Medicina\BackendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class TipodecargoType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('duracion')
            ->add('nombre')
            ->add('codigo')
        ;
    }

    public function getName()
    {
        return 'medicina_kernelbundle_tipodecargotype';
    }
}
