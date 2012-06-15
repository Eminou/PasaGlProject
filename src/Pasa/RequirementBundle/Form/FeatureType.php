<?php

namespace Pasa\RequirementBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class FeatureType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('manager')
        ;
    }

    public function getName()
    {
        return 'pasa_requirementbundle_featuretype';
    }
}
