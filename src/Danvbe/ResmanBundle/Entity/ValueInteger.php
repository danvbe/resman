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
 * @ORM\Entity(repositoryClass="Danvbe\ResmanBundle\Repository\ValueIntegerRepository")
 */
class ValueInteger extends Value
{
    /**
     * @var string $value_integer
     * @ORM\Column(type="integer")
     */
    protected $value_integer;

    /**
     * @return integer The values stored in this object
     */
    public function getValue()
    {
        return $this->value_integer;
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
     * Set value_integer
     *
     * @param integer $valueInteger
     * @return ValueInteger
     */
    public function setValueInteger($valueInteger)
    {
        $this->value_integer = $valueInteger;
    
        return $this;
    }

    /**
     * Get value_integer
     *
     * @return integer 
     */
    public function getValueInteger()
    {
        return $this->value_integer;
    }
}