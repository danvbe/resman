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
 * @ORM\Entity(repositoryClass="Danvbe\ResmanBundle\Repository\ValueStringRepository")
 */
class ValueString extends Value
{
    /**
     * @var string $value_string
     * @ORM\Column(type="string", length=255)
     */
    protected $value_string;

    /**
     * @return string The values stored in this object
     */
    public function getValue()
    {
        return $this->value_string;
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
     * Set value_string
     *
     * @param string $valueString
     * @return ValueString
     */
    public function setValueString($valueString)
    {
        $this->value_string = $valueString;
    
        return $this;
    }

    /**
     * Get value_string
     *
     * @return string 
     */
    public function getValueString()
    {
        return $this->value_string;
    }
}