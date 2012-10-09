<?php
/**
 * Created by JetBrains PhpStorm.
 * User: admin
 * Date: 28.09.2012
 * Time: 12:57
 * To change this template use File | Settings | File Templates.
 */

namespace Danvbe\ResmanBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Danvbe\ResmanBundle\Repository\ValueFloatRepository")
 */
class ValueFloat extends Value
{
    /**
     * @var string $value_float
     * @ORM\Column(type="float")
     */
    protected $value_float;

    /**
     * @return float The value stored in this object
     */
    public function getValue()
    {
        return $this->value_float;
    }
    /**
     * @var integer $id
     */
    protected $id;

    /**
     * @var Danvbe\ResmanBundle\Entity\Resource
     */
    protected $resource;



    ///////////////////////////////////
    //GENERATED CODE - CAN BE REMOVED//
    ///////////////////////////////////
    /**
     * Set value_float
     *
     * @param float $valueFloat
     * @return ValueFloat
     */
    public function setValueFloat($valueFloat)
    {
        $this->value_float = $valueFloat;
    
        return $this;
    }

    /**
     * Get value_float
     *
     * @return float 
     */
    public function getValueFloat()
    {
        return $this->value_float;
    }
}