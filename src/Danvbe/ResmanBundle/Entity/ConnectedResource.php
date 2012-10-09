<?php
/**
 * Created by JetBrains PhpStorm.
 * User: admin
 * Date: 05.10.2012
 * Time: 18:40
 * To change this template use File | Settings | File Templates.
 */

namespace Danvbe\ResmanBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="Danvbe\ResmanBundle\Repository\ConnectedResourceRepository")
 * @ORM\Table(name="rm_connected_resource")
 */
class ConnectedResource
{
    /**
     * @var integer $id
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var \Danvbe\ResmanBundle\Entity\Connection $connection
     * @ORM\ManyToOne(targetEntity="Connection", inversedBy="connected_resources")
     * @ORM\JoinColumn(name="connection_id",referencedColumnName="id")
     */
    protected $connection;

    /**
     * @var \Danvbe\ResmanBundle\Entity\Resource $resource
     * @ORM\ManyToOne(targetEntity="Resource", inversedBy="connected_resources")
     * @ORM\JoinColumn(name="resource_id",referencedColumnName="id")
     */
    protected $resource;

    /**
     * @var \Danvbe\ResmanBundle\Entity\ConnectedResourceType $connected_resource_type
     * @ORM\ManyToOne(targetEntity="ConnectedResourceType", inversedBy="connected_resources")
     * @ORM\JoinColumn(name="connected_resource_type_id",referencedColumnName="id")
     */
    protected $connected_resource_type;


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
     * Set connection
     *
     * @param Danvbe\ResmanBundle\Entity\Connection $connection
     * @return ConnectedResource
     */
    public function setConnection(\Danvbe\ResmanBundle\Entity\Connection $connection = null)
    {
        $this->connection = $connection;
    
        return $this;
    }

    /**
     * Get connection
     *
     * @return Danvbe\ResmanBundle\Entity\Connection 
     */
    public function getConnection()
    {
        return $this->connection;
    }

    /**
     * Set resource
     *
     * @param Danvbe\ResmanBundle\Entity\Resource $resource
     * @return ConnectedResource
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

    /**
     * Set connected_resource_type
     *
     * @param Danvbe\ResmanBundle\Entity\ConnectedResourceType $connectedResourceType
     * @return ConnectedResource
     */
    public function setConnectedResourceType(\Danvbe\ResmanBundle\Entity\ConnectedResourceType $connectedResourceType = null)
    {
        $this->connected_resource_type = $connectedResourceType;
    
        return $this;
    }

    /**
     * Get connected_resource_type
     *
     * @return Danvbe\ResmanBundle\Entity\ConnectedResourceType 
     */
    public function getConnectedResourceType()
    {
        return $this->connected_resource_type;
    }
}