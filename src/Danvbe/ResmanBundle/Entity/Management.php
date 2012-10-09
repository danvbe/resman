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
 * @ORM\Entity(repositoryClass="Danvbe\ResmanBundle\Repository\ManagementRepository")
 * @ORM\Table(name="rm_management")
 */
class Management
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
     * @var text $description
     * @ORM\Column(type="text")
     */
    protected $description;

    /**
     * @var ArrayCollection $resource_types
     * @ORM\OneToMany(targetEntity="ResourceType", mappedBy="management")
     */
    protected $resource_types;

    /**
     * @var \Danvbe\ResmanBundle\Entity\User $owner
     * @ORM\ManyToOne(targetEntity="User", inversedBy="managements")
     * @ORM\JoinColumn(name="owner_id",referencedColumnName="id")
     */
    protected $owner;


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
     * Set name
     *
     * @param string $name
     * @return Management
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
     * @return Management
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
     * Add resource_types
     *
     * @param Danvbe\ResmanBundle\Entity\ResourceType $resourceTypes
     * @return Management
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

    /**
     * Set owner
     *
     * @param Danvbe\ResmanBundle\Entity\User $owner
     * @return Management
     */
    public function setOwner(\Danvbe\ResmanBundle\Entity\User $owner = null)
    {
        $this->owner = $owner;
    
        return $this;
    }

    /**
     * Get owner
     *
     * @return Danvbe\ResmanBundle\Entity\User 
     */
    public function getOwner()
    {
        return $this->owner;
    }
}