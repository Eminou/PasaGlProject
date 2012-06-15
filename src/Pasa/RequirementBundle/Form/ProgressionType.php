<?php

namespace Pasa\RequirementBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ProgressionType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('percentage')
            ->add('progression_date')
            ->add('exigency')
        ;
    }

    public function getName()
    {
        return 'pasa_requirementbundle_progressiontype';
    }
}
