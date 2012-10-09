<?php
/**
 * Created by JetBrains PhpStorm.
 * User: admin
 * Date: 05.10.2012
 * Time: 18:27
 * To change this template use File | Settings | File Templates.
 */

namespace Danvbe\ResmanBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="Danvbe\ResmanBundle\Repository\ConnectionRepository")
 * @ORM\Table(name="rm_connection")
 */
class Connection
{
    /**
     * @var integer $id
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var \Danvbe\ResmanBundle\Entity\ConnectionType $connection_type
     * @ORM\ManyToOne(targetEntity="ConnectionType", inversedBy="connections")
     * @ORM\JoinColumn(name="connection_type_id",referencedColumnName="id")
     */
    protected $resource_type;

    /**
     * @var ArrayCollection $connected_resources
     * @ORM\OneToMany(targetEntity="ConnectedResource", mappedBy="connection")
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
     * @param Danvbe\ResmanBundle\Entity\ConnectionType $resourceType
     * @return Connection
     */
    public function setResourceType(\Danvbe\ResmanBundle\Entity\ConnectionType $resourceType = null)
    {
        $this->resource_type = $resourceType;
    
        return $this;
    }

    /**
     * Get resource_type
     *
     * @return Danvbe\ResmanBundle\Entity\ConnectionType 
     */
    public function getResourceType()
    {
        return $this->resource_type;
    }

    /**
     * Add connected_resources
     *
     * @param Danvbe\ResmanBundle\Entity\ConnectedResources $connectedResources
     * @return Connection
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