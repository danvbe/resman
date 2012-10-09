<?php
/**
 * Created by JetBrains PhpStorm.
 * User: admin
 * Date: 05.10.2012
 * Time: 18:18
 * To change this template use File | Settings | File Templates.
 */

namespace Danvbe\ResmanBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="Danvbe\ResmanBundle\Repository\TypeOfConnectionTypeRepository")
 * @ORM\Table(name="rm_type_of_connection_type")
 */
class TypeOfConnectionType
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
    protected $type;

    /**
     * @var ArrayCollection $connection_types
     * @ORM\OneToMany(targetEntity="ConnectionType", mappedBy="type")
     */
    protected $connection_types;

    public function __construct()
    {
        $this->connection_types = new ArrayCollection();
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
     * Set type
     *
     * @param string $type
     * @return TypeOfConnectionType
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Add connection_types
     *
     * @param Danvbe\ResmanBundle\Entity\ConnectionType $connectionTypes
     * @return TypeOfConnectionType
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