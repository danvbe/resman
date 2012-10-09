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
class ValueTime extends Value
{
    /**
     * @var string $value_time
     * @ORM\Column(type="time")
     */
    protected $value_time;

    /**
     * @return time The values stored in this object
     */
    public function getValue()
    {
        return $this->value_time;
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
     * Set value_time
     *
     * @param \DateTime $valueTime
     * @return ValueTime
     */
    public function setValueTime($valueTime)
    {
        $this->value_time = $valueTime;
    
        return $this;
    }

    /**
     * Get value_time
     *
     * @return \DateTime 
     */
    public function getValueTime()
    {
        return $this->value_time;
    }
}