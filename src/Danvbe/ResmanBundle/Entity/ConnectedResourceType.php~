<?php
/**
 * Created by JetBrains PhpStorm.
 * User: admin
 * Date: 05.10.2012
 * Time: 18:30
 * To change this template use File | Settings | File Templates.
 */

namespace Danvbe\ResmanBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="Danvbe\ResmanBundle\Repository\ConnectedResourceTypeRepository")
 * @ORM\Table(name="rm_connected_resource_type")
 */
class ConnectedResourceType
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
     * @var \Danvbe\ResmanBundle\Entity\ConnectionType $connection_type
     * @ORM\ManyToOne(targetEntity="ConnectionType", inversedBy="connected_resource_types")
     * @ORM\JoinColumn(name="connection_type_id",referencedColumnName="id")
     */
    protected $connection_type;

    /**
     * @var \Danvbe\ResmanBundle\Entity\ResourceType $resource_type
     * @ORM\ManyToOne(targetEntity="ResourceType", inversedBy="connected_resource_types")
     * @ORM\JoinColumn(name="resource_type_id",referencedColumnName="id")
     */
    protected $resource_type;

    /**
     * @var boolean is_master
     * @ORM\Column(type="boolean")
     */
    protected $is_master;

    /**
     * @var boolean is_unique
     * @ORM\Column(type="boolean")
     */
    protected $is_unique;

    /**
     * @var boolean is_choosable
     * @ORM\Column(type="boolean")
     */
    protected $is_choosable;

    /**
     * @var boolean is_single_instance
     * @ORM\Column(type="boolean")
     */
    protected $is_single_instance;

    /**
     * @var boolean is_required
     * @ORM\Column(type="boolean")
     */
    protected $is_required;

    /**
     * @var ArrayCollection $connected_resources
     * @ORM\OneToMany(targetEntity="ConnectedResource", mappedBy="connected_resource_type")
     */
    protected $connected_resources;

    public  function __construct()
    {
        $this->connected_resources = new ArrayCollection();
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
     * @return ConnectedResourceType
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
     * @return ConnectedResourceType
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
     * Set is_master
     *
     * @param boolean $isMaster
     * @return ConnectedResourceType
     */
    public function setIsMaster($isMaster)
    {
        $this->is_master = $isMaster;
    
        return $this;
    }

    /**
     * Get is_master
     *
     * @return boolean 
     */
    public function getIsMaster()
    {
        return $this->is_master;
    }

    /**
     * Set is_unique
     *
     * @param boolean $isUnique
     * @return ConnectedResourceType
     */
    public function setIsUnique($isUnique)
    {
        $this->is_unique = $isUnique;
    
        return $this;
    }

    /**
     * Get is_unique
     *
     * @return boolean 
     */
    public function getIsUnique()
    {
        return $this->is_unique;
    }

    /**
     * Set is_choosable
     *
     * @param boolean $isChoosable
     * @return ConnectedResourceType
     */
    public function setIsChoosable($isChoosable)
    {
        $this->is_choosable = $isChoosable;
    
        return $this;
    }

    /**
     * Get is_choosable
     *
     * @return boolean 
     */
    public function getIsChoosable()
    {
        return $this->is_choosable;
    }

    /**
     * Set is_single_instance
     *
     * @param boolean $isSingleInstance
     * @return ConnectedResourceType
     */
    public function setIsSingleInstance($isSingleInstance)
    {
        $this->is_single_instance = $isSingleInstance;
    
        return $this;
    }

    /**
     * Get is_single_instance
     *
     * @return boolean 
     */
    public function getIsSingleInstance()
    {
        return $this->is_single_instance;
    }

    /**
     * Set is_required
     *
     * @param boolean $isRequired
     * @return ConnectedResourceType
     */
    public function setIsRequired($isRequired)
    {
        $this->is_required = $isRequired;
    
        return $this;
    }

    /**
     * Get is_required
     *
     * @return boolean 
     */
    public function getIsRequired()
    {
        return $this->is_required;
    }

    /**
     * Set connection_type
     *
     * @param Danvbe\ResmanBundle\Entity\ConnectionType $connectionType
     * @return ConnectedResourceType
     */
    public function setConnectionType(\Danvbe\ResmanBundle\Entity\ConnectionType $connectionType = null)
    {
        $this->connection_type = $connectionType;
    
        return $this;
    }

    /**
     * Get connection_type
     *
     * @return Danvbe\ResmanBundle\Entity\ConnectionType 
     */
    public function getConnectionType()
    {
        return $this->connection_type;
    }

    /**
     * Set resource_type
     *
     * @param Danvbe\ResmanBundle\Entity\ResourceType $resourceType
     * @return ConnectedResourceType
     */
    public function setResourceType(\Danvbe\ResmanBundle\Entity\ResourceType $resourceType = null)
    {
        $this->resource_type = $resourceType;
    
        return $this;
    }

    /**
     * Get resource_type
     *
     * @return Danvbe\ResmanBundle\Entity\ResourceType 
     */
    public function getResourceType()
    {
        return $this->resource_type;
    }

    /**
     * Add connected_resources
     *
     * @param Danvbe\ResmanBundle\Entity\ConnectedResource $connectedResources
     * @return ConnectedResourceType
     */
    public function addConnectedResource(\Danvbe\ResmanBundle\Entity\ConnectedResource $connectedResources)
    {
        $this->connected_resources[] = $connectedResources;
    
        return $this;
    }

    /**
     * Remove connected_resources
     *
     * @param Danvbe\ResmanBundle\Entity\ConnectedResource $connectedResources
     */
    public function removeConnectedResource(\Danvbe\ResmanBundle\Entity\ConnectedResource $connectedResources)
    {
        $this->connected_resources->removeElement($connectedResources);
    }

    /**
     * Get connected_resources
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getConnectedResources()
    {
        return $this->connected_resources;
    }
}