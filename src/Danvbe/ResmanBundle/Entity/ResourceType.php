<?php
/**
 * Created by JetBrains PhpStorm.
 * User: admin
 * Date: 28.09.2012
 * Time: 10:57
 * To change this template use File | Settings | File Templates.
 */

namespace Danvbe\ResmanBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="Danvbe\ResmanBundle\Repository\ResourceTypeRepository")
 * @ORM\Table(name="rm_resource_type")
 */
class ResourceType
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
    protected $name;

    /**
     * @var text $name
     * @ORM\Column(type="text")
     */
    protected $description;

    /**
     * @var \Danvbe\ResmanBundle\Entity\DataType $data_type
     * @ORM\ManyToOne(targetEntity="DataType", inversedBy="resource_types")
     * @ORM\JoinColumn(name="data_type_id",referencedColumnName="id")
     */
    protected $data_type;

    /**
     * @var \Danvbe\ResmanBundle\Entity\Management $management
     * @ORM\ManyToOne(targetEntity="Management", inversedBy="resource_types")
     * @ORM\JoinColumn(name="management_id",referencedColumnName="id")
     */
    protected $management;

    /**
     * @var ArrayCollection $resources
     * @ORM\OneToMany(targetEntity="Resource", mappedBy="resource_type")
     */
    protected $resources;

    /**
     * @var ArrayCollection $connected_resource_types
     * @ORM\OneToMany(targetEntity="ConnectedResourceType", mappedBy="resource_type")
     */
    protected $connected_resource_types;


    public function __construct()
    {
        $this->resources = new ArrayCollection();
        $this->connected_resource_types = new ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return ResourceType
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return ResourceType
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set data_type
     *
     * @param Danvbe\ResmanBundle\Entity\DataType $dataType
     * @return ResourceType
     */
    public function setDataType(\Danvbe\ResmanBundle\Entity\DataType $dataType = null)
    {
        $this->data_type = $dataType;
    
        return $this;
    }

    /**
     * Get data_type
     *
     * @return Danvbe\ResmanBundle\Entity\DataType 
     */
    public function getDataType()
    {
        return $this->data_type;
    }

    /**
     * Set management
     *
     * @param Danvbe\ResmanBundle\Entity\Management $management
     * @return ResourceType
     */
    public function setManagement(\Danvbe\ResmanBundle\Entity\Management $management = null)
    {
        $this->management = $management;
    
        return $this;
    }

    /**
     * Get management
     *
     * @return Danvbe\ResmanBundle\Entity\Management 
     */
    public function getManagement()
    {
        return $this->management;
    }

    /**
     * Add resources
     *
     * @param Danvbe\ResmanBundle\Entity\Resource $resources
     * @return ResourceType
     */
    public function addResource(\Danvbe\ResmanBundle\Entity\Resource $resources)
    {
        $this->resources[] = $resources;
    
        return $this;
    }

    /**
     * Remove resources
     *
     * @param Danvbe\ResmanBundle\Entity\Resource $resources
     */
    public function removeResource(\Danvbe\ResmanBundle\Entity\Resource $resources)
    {
        $this->resources->removeElement($resources);
    }

    /**
     * Get resources
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * Add connected_resource_types
     *
     * @param Danvbe\ResmanBundle\Entity\ConnectedResourceType $connectedResourceTypes
     * @return ResourceType
     */
    public function addConnectedResourceType(\Danvbe\ResmanBundle\Entity\ConnectedResourceType $connectedResourceTypes)
    {
        $this->connected_resource_types[] = $connectedResourceTypes;
    
        return $this;
    }

    /**
     * Remove connected_resource_types
     *
     * @param Danvbe\ResmanBundle\Entity\ConnectedResourceType $connectedResourceTypes
     */
    public function removeConnectedResourceType(\Danvbe\ResmanBundle\Entity\ConnectedResourceType $connectedResourceTypes)
    {
        $this->connected_resource_types->removeElement($connectedResourceTypes);
    }

    /**
     * Get connected_resource_types
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getConnectedResourceTypes()
    {
        return $this->connected_resource_types;
    }

    /**
     * Add connection_types
     *
     * @param Danvbe\ResmanBundle\Entity\ConnectionType $connectionTypes
     * @return ResourceType
     */
    public function addConnectionType(\Danvbe\ResmanBundle\Entity\ConnectionType $connectionTypes)
    {
        $this->connection_types[] = $connectionTypes;
    
        return $this;
    }

    /**
     * Remove connection_types
     *
     * @param Danvbe\ResmanBundle\Entity\ConnectionType $connectionTypes
     */
    public function removeConnectionType(\Danvbe\ResmanBundle\Entity\ConnectionType $connectionTypes)
    {
        $this->connection_types->removeElement($connectionTypes);
    }

    /**
     * Get connection_types
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getConnectionTypes()
    {
        return $this->connection_types;
    }
}