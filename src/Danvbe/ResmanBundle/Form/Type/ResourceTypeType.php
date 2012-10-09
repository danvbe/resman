<?php
/**
 * Created by JetBrains PhpStorm.
 * User: admin
 * Date: 08.10.2012
 * Time: 14:09
 * To change this template use File | Settings | File Templates.
 */
namespace Danvbe\ResmanBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormBuilderInterface;

class ResourceTypeType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name','text',array(
            'max_length' => 100,
            'required' => true,
            'label' => 'Nume'
        ));
        $builder->add('description','textarea',array(
            'max_length' => 4000,
            'required' => true,
            'label' => 'Descriere',
        ));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Danvbe\ResmanBundle\Entity\ResourceType'
        ));
    }

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return 'resource_type';
    }
}
