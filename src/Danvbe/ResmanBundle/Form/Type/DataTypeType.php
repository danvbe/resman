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

class DataTypeType extends AbstractType
{

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        //$choices =
        $resolver->setDefaults(array(
           'choices' => array()
        ));
    }

    public function getParent()
    {
        return 'choice';
    }
    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return 'data_type';
    }
}
