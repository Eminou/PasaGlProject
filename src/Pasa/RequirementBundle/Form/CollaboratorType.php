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
            ->add('login')
            ->add('password')
            ->add('manager')
        ;
    }

    public function getName()
    {
        return 'pasa_requirementbundle_collaboratortype';
    }
}
