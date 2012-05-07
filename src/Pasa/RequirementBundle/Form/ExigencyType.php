<?php

namespace Pasa\RequirementBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ExigencyType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('functionality')
            ->add('number')
            ->add('description')
            ->add('priority')
            ->add('charge')
            ->add('start_date')
            ->add('end_date')
            ->add('project')
        ;
    }

    public function getName()
    {
        return 'pasa_requirementbundle_exigencytype';
    }
}
