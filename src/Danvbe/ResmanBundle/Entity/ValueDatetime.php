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
 * @ORM\Entity(repositoryClass="Danvbe\ResmanBundle\Repository\ValueTimeRepository")
 */
class ValueDatetime extends Value
{
    /**
     * @var string $value_datetime
     * @ORM\Column(type="datetime")
     */
    protected $value_datetime;

    /**
     * @return datetime The values stored in this object
     */
    public function getValue()
    {
        return $this->value_datetime;
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
     * Set value_datetime
     *
     * @param \DateTime $valueDatetime
     * @return ValueDatetime
     */
    public function setValueDatetime($valueDatetime)
    {
        $this->value_datetime = $valueDatetime;
    
        return $this;
    }

    /**
     * Get value_datetime
     *
     * @return \DateTime 
     */
    public function getValueDatetime()
    {
        return $this->value_datetime;
    }
}