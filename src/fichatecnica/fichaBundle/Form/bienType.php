<?php

namespace fichatecnica\fichaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class bienType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('descbien')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'fichatecnica\fichaBundle\Entity\bien'
        ));
    }

    public function getName()
    {
        return 'fichatecnica_fichabundle_bientype';
    }
}
