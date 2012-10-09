<?php
/**
 * Created by JetBrains PhpStorm.
 * User: admin
 * Date: 06.10.2012
 * Time: 11:58
 * To change this template use File | Settings | File Templates.
 */

namespace Danvbe\ResmanBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormBuilderInterface;

class PropertyTypeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('resource_type','entity',array(
            'class' => 'DanvbeResmanBundle:ResourceType',
            'property' => 'name',  //property used to render the content of the select
            'required' => true,
            'expanded' => false,
            'multiple' => false,
            'label' => 'Tip de resursa',
            'read_only' => true,
        ));
        $builder->add('name','text',array(
            'max_length' => 100,
            'required' => true,
            'label' => 'Tip de proprietate'
        ));
        $builder->add('data_type','entity',array(
            'class' => 'DanvbeResmanBundle:DataType',
            'property' => 'data_type',  //property used to render the content of the select
            'required' => true,
            'expanded' => false,
            'multiple' => false,
            'label' => 'Tip de data',
        ));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Danvbe\ResmanBundle\Entity\PropertyType'
        ));
    }

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return 'property_type';
    }
}
