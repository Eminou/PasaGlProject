<?php

namespace Pasa\RequirementBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class CollaboratorType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('first_name')
            ->add('last_name')
            ->add('username')
            ->add('salt')
            ->add('password')
            ->add('email')
            ->add('is_active')
            ->add('manager')
        ;
    }

    public function getName()
    {
        return 'pasa_requirementbundle_collaboratortype';
    }
}
