<?php

namespace Medicina\BackendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ConcursoType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('fechaInicioExpediente')
            ->add('fechaCierre')
            ->add('fechaInicioInscripcion')
            ->add('fechaEvaluacion')
            ->add('fechaEntregaActa')
            ->add('numeroExpediente')
            ->add('cerrado')
            ->add('oficina')
            ->add('persona')
        ;
    }

    public function getName()
    {
        return 'medicina_kernelbundle_concursotype';
    }
}
