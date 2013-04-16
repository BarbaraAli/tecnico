<?php

namespace fichatecnica\fichaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class dependenciasType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombredep')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'fichatecnica\fichaBundle\Entity\dependencias'
        ));
    }

    public function getName()
    {
        return 'fichatecnica_fichabundle_dependenciastype';
    }
}
