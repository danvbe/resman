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
 * @ORM\Entity(repositoryClass="Danvbe\ResmanBundle\Repository\ValueTextRepository")
 */
class ValueText extends Value
{
    /**
     * @var string $value_text
     * @ORM\Column(type="text")
     */
    protected $value_text;

    /**
     * @return text The values stored in this object
     */
    public function getValue()
    {
        return $this->value_text;
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
     * Set value_text
     *
     * @param string $valueText
     * @return ValueText
     */
    public function setValueText($valueText)
    {
        $this->value_text = $valueText;
    
        return $this;
    }

    /**
     * Get value_text
     *
     * @return string 
     */
    public function getValueText()
    {
        return $this->value_text;
    }
}