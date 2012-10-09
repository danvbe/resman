<?php
/**
 * Created by JetBrains PhpStorm.
 * User: admin
 * Date: 28.09.2012
 * Time: 12:17
 * To change this template use File | Settings | File Templates.
 */

namespace Danvbe\ResmanBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="Danvbe\ResmanBundle\Repository\ResourceRepository")
 * @ORM\Table(name="rm_resource")
 */
class Resource
{
    /**
     * @var integer $id
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var \Danvbe\ResmanBundle\Entity\ResourceType $resource_type
     * @ORM\ManyToOne(targetEntity="ResourceType", inversedBy="resources")
     * @ORM\JoinColumn(name="resource_type_id",referencedColumnName="id")
     */
    protected $resource_type;

    /**
     * @var \Danvbe\ResmanBundle\Entity\Value $value;
     * @ORM\OneToOne(targetEntity="Value", mappedBy="resource")
     */
    protected $value;

    /**
     * @var ArrayCollection $connected_resources
     * @ORM\OneToMany(targetEntity="ConnectedResource", mappedBy="resource")
     */
    protected $connected_resources;

    public function __construct()
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
     * Set resource_type
     *
     * @param Danvbe\ResmanBundle\Entity\ResourceType $resourceType
     * @return Resource
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
     * Set value
     *
     * @param Danvbe\ResmanBundle\Entity\Value $value
     * @return Resource
     */
    public function setValue(\Danvbe\ResmanBundle\Entity\Value $value = null)
    {
        $this->value = $value;
    
        return $this;
    }

    /**
     * Get value
     *
     * @return Danvbe\ResmanBundle\Entity\Value 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Add connected_resources
     *
     * @param Danvbe\ResmanBundle\Entity\ConnectedResources $connectedResources
     * @return Resource
     */
    public function addConnectedResource(\Danvbe\ResmanBundle\Entity\ConnectedResources $connectedResources)
    {
        $this->connected_resources[] = $connectedResources;
    
        return $this;
    }

    /**
     * Remove connected_resources
     *
     * @param Danvbe\ResmanBundle\Entity\ConnectedResources $connectedResources
     */
    public function removeConnectedResource(\Danvbe\ResmanBundle\Entity\ConnectedResources $connectedResources)
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