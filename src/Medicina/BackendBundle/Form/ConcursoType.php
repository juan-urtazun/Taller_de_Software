<?php

namespace Medicina\BackendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ConcursoType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('fechaInicioExpediente','date',array(
            'widget' => 'single_text',
            'format' => 'dd/MM/yyyy',
            'attr' => array('class' => 'date'),
            'label'=>"Fecha de Inicio"    
        ))
            ->add('fechaCierre','date',array(
            'widget' => 'single_text',
            'format' => 'dd/MM/yyyy',
            'attr' => array('class' => 'date'),
            'label'=>"Fecha de Cierre"    
        ))
            ->add('fechaInicioInscripcion','date',array(
            'widget' => 'single_text',
            'format' => 'dd/MM/yyyy',
            'attr' => array('class' => 'date'),
            'label'=>"Fecha de Inicio Inscripción"    
        ))
            ->add('fechaEvaluacion','date',array(
            'widget' => 'single_text',
            'format' => 'dd/MM/yyyy',
            'attr' => array('class' => 'date'),
            'label'=>"Fecha de Evaluación"    
        ))
            ->add('fechaEntregaActa','date',array(
            'widget' => 'single_text',
            'format' => 'dd/MM/yyyy',
            'attr' => array('class' => 'date'),
            'label'=>"Fecha de Entrega del Acta"    
        ))
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
