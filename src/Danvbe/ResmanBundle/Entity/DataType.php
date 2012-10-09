<?php
/**
 * Created by JetBrains PhpStorm.
 * User: admin
 * Date: 05.10.2012
 * Time: 17:58
 * To change this template use File | Settings | File Templates.
 */

namespace Danvbe\ResmanBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="Danvbe\ResmanBundle\Repository\DataTypeRepository")
 * @ORM\Table(name="rm_data_type")
 */
class DataType
{
    /**
     * @var integer $id
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string $name
     * @ORM\Column(type="string", length=100)
     */
    protected $data_type;

    /**
     * @var ArrayCollection $resource_types
     * @ORM\OneToMany(targetEntity="ResourceType", mappedBy="data_type")
     */
    protected $resource_types;

    public function __construct()
    {
        $this->resource_types = new ArrayCollection();
    }



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
     * Set data_type
     *
     * @param string $dataType
     * @return DataType
     */
    public function setDataType($dataType)
    {
        $this->data_type = $dataType;
    
        return $this;
    }

    /**
     * Get data_type
     *
     * @return string 
     */
    public function getDataType()
    {
        return $this->data_type;
    }

    /**
     * Add resource_types
     *
     * @param Danvbe\ResmanBundle\Entity\ResourceType $resourceTypes
     * @return DataType
     */
    public function addResourceType(\Danvbe\ResmanBundle\Entity\ResourceType $resourceTypes)
    {
        $this->resource_types[] = $resourceTypes;
    
        return $this;
    }

    /**
     * Remove resource_types
     *
     * @param Danvbe\ResmanBundle\Entity\ResourceType $resourceTypes
     */
    public function removeResourceType(\Danvbe\ResmanBundle\Entity\ResourceType $resourceTypes)
    {
        $this->resource_types->removeElement($resourceTypes);
    }

    /**
     * Get resource_types
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getResourceTypes()
    {
        return $this->resource_types;
    }
}