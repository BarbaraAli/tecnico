<?php

namespace fichatecnica\fichaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class fichaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fecha')
            ->add('solicitado')
            ->add('dependencia')
            ->add('observaciones')
            ->add('realizadopor')
            ->add('firmadopor')
            ->add('bien')
            ->add('componentes')
            ->add('tipot')
            ;
        
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'fichatecnica\fichaBundle\Entity\ficha'
        ));
    }

    public function getName()
    {
        return 'fichatecnica_fichabundle_fichatype';
    }
}
