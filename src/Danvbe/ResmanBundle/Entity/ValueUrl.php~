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
 * @ORM\Entity(repositoryClass="Danvbe\ResmanBundle\Repository\ValueUrlRepository")
 */
class ValueUrl extends Value
{
    /**
     * @var string $value_url
     * @ORM\Column(type="text")
     */
    protected $value_url;

    /**
     * @return text The value stored in this object
     */
    public function getValue()
    {
        return $this->value_url;
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
     * Set value_url
     *
     * @param string $valueUrl
     * @return ValueUrl
     */
    public function setValueUrl($valueUrl)
    {
        $this->value_url = $valueUrl;
    
        return $this;
    }

    /**
     * Get value_url
     *
     * @return string 
     */
    public function getValueUrl()
    {
        return $this->value_url;
    }
}