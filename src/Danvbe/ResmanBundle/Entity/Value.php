<?php
/**
 * Created by JetBrains PhpStorm.
 * User: admin
 * Date: 28.09.2012
 * Time: 12:47
 * To change this template use File | Settings | File Templates.
 */

namespace Danvbe\ResmanBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Danvbe\ResmanBundle\Repository\ValueRepository")
 * @ORM\Table(name="rm_value")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discriminator", type="string")
 * @ORM\DiscriminatorMap({"string" = "ValueString",
 *                          "text" = "ValueText",
 *                          "date" = "ValueDate",
 *                          "time" = "ValueTime",
 *                          "datetime" = "ValueDatetime",
 *                          "integer" = "ValueInteger",
 *                          "float" = "ValueFloat",
 *                          "url" = "ValueUrl",
 *                          "file" = "ValueFile",})
 */
abstract class Value
{
    /**
     * @var integer $id
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var \Danvbe\ResmanBundle\Entity\Resource $resource
     * @ORM\OneToOne(targetEntity="Resource")
     * @ORM\JoinColumn(name="resource_id", referencedColumnName="id")
     */
    protected $resource;

    /**
     * Abstract function - is in base class so it can be called from any extended ones
     *
     * @return mixed the value stored in the extended classes
     */
    public abstract function getValue();


    ///////////////////////////////////
    //GENERATED CODE - CAN BE REMOVED//
    ///////////////////////////////////
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
     * @return Value
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