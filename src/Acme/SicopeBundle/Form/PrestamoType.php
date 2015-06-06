<?php

namespace Acme\SicopeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PrestamoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fechaprestamo','date',array(
                'widget'=>'single_text',
            ))
            ->add('fechadevolucion','date',array(
                'widget'=>'single_text',
            ))
            ->add('descripcion')
            ->add('idequipo')
            ->add('idpresta')
            ->add('idrecibe')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\SicopeBundle\Entity\Prestamo'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'acme_sicopebundle_prestamo';
    }
}
