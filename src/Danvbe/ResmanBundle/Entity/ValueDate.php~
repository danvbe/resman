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
 * @ORM\Entity(repositoryClass="Danvbe\ResmanBundle\Repository\ValueDateRepository")
 */
class ValueDate extends Value
{
    /**
     * @var string $value_string
     * @ORM\Column(type="date", length=255)
     */
    protected $value_date;

    /**
     * @return string The values stored in this object
     */
    public function getValue()
    {
        return $this->value_date;
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
     * Set value_date
     *
     * @param \DateTime $valueDate
     * @return ValueDate
     */
    public function setValueDate($valueDate)
    {
        $this->value_date = $valueDate;
    
        return $this;
    }

    /**
     * Get value_date
     *
     * @return \DateTime 
     */
    public function getValueDate()
    {
        return $this->value_date;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set resource
     *
     * @param Danvbe\ResmanBundle\Entity\Resource $resource
     * @return ValueDate
     */
    public function setResource(\Danvbe\ResmanBundle\Entity\Resource $resource = null)
    {
        $this->resource = $resource;
    
        return $this;
    }

    /**
     * Get resource
     *
     * @return Danvbe\ResmanBundle\Entity\Resource 
     */
    public function getResource()
    {
        return $this->resource;
    }
}