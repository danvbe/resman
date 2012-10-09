<?php
/**
 * Created by JetBrains PhpStorm.
 * User: admin
 * Date: 05.10.2012
 * Time: 18:14
 * To change this template use File | Settings | File Templates.
 */

namespace Danvbe\ResmanBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="Danvbe\ResmanBundle\Repository\ConnectionTypeRepository")
 * @ORM\Table(name="rm_connection_type")
 */
class ConnectionType
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
     * @var boolean is_label
     * @ORM\Column(type="boolean")
     */
    protected $is_label;

    /**
     * @var \Danvbe\ResmanBundle\Entity\TypeOfConnectionType $type
     * @ORM\ManyToOne(targetEntity="TypeOfConnectionType", inversedBy="connection_types")
     * @ORM\JoinColumn(name="type_id",referencedColumnName="id")
     */
    protected $type;

    /**
     * @var ArrayCollection $connections
     * @ORM\OneToMany(targetEntity="Connection", mappedBy="connection_type")
     */
    protected $connections;

    /**
     * @var ArrayCollection $connected_resource_types
     * @ORM\OneToMany(targetEntity="ConnectedResourceType", mappedBy="connection_type")
     */
    protected $connected_resource_types;

    public  function __construct()
    {
        $this->connections = new ArrayCollection();
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
     * @return ConnectionType
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
     * @return ConnectionType
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
     * Set is_label
     *
     * @param boolean $isLabel
     * @return ConnectionType
     */
    public function setIsLabel($isLabel)
    {
        $this->is_label = $isLabel;
    
        return $this;
    }

    /**
     * Get is_label
     *
     * @return boolean 
     */
    public function getIsLabel()
    {
        return $this->is_label;
    }

    /**
     * Set type
     *
     * @param Danvbe\ResmanBundle\Entity\TypeOfConnectionType $type
     * @return ConnectionType
     */
    public function setType(\Danvbe\ResmanBundle\Entity\TypeOfConnectionType $type = null)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return Danvbe\ResmanBundle\Entity\TypeOfConnectionType 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Add connections
     *
     * @param Danvbe\ResmanBundle\Entity\Connection $connections
     * @return ConnectionType
     */
    public function addConnection(\Danvbe\ResmanBundle\Entity\Connection $connections)
    {
        $this->connections[] = $connections;
    
        return $this;
    }

    /**
     * Remove connections
     *
     * @param Danvbe\ResmanBundle\Entity\Connection $connections
     */
    public function removeConnection(\Danvbe\ResmanBundle\Entity\Connection $connections)
    {
        $this->connections->removeElement($connections);
    }

    /**
     * Get connections
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getConnections()
    {
        return $this->connections;
    }

    /**
     * Add connected_resource_types
     *
     * @param Danvbe\ResmanBundle\Entity\ConnectedResourceType $connectedResourceTypes
     * @return ConnectionType
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
     * Add resource_types
     *
     * @param Danvbe\ResmanBundle\Entity\ResourceType $resourceTypes
     * @return ConnectionType
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