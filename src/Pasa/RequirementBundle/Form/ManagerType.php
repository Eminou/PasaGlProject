<?php

namespace Pasa\RequirementBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ManagerType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('first_name')
            ->add('last_name')
            ->add('username')
            ->add('password')
            ->add('email')
            ->add('is_active')
        ;
    }

    public function getName()
    {
        return 'pasa_requirementbundle_managertype';
    }
}
