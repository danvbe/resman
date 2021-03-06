<?php
namespace Danvbe\ResmanBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="Danvbe\ResmanBundle\Repository\UserRepository")
 * @ORM\Table(name="rm_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var ArrayCollection $managements
     * @ORM\OneToMany(targetEntity="Management", mappedBy="owner")
     */
    protected $managements;

    public function __construct()
    {
        parent::__construct();
        $this->managements = new ArrayCollection();
        // your own logic
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
     * Add managements
     *
     * @param Danvbe\ResmanBundle\Entity\Management $managements
     * @return User
     */
    public function addManagement(\Danvbe\ResmanBundle\Entity\Management $managements)
    {
        $this->managements[] = $managements;
    
        return $this;
    }

    /**
     * Remove managements
     *
     * @param Danvbe\ResmanBundle\Entity\Management $managements
     */
    public function removeManagement(\Danvbe\ResmanBundle\Entity\Management $managements)
    {
        $this->managements->removeElement($managements);
    }

    /**
     * Get managements
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getManagements()
    {
        return $this->managements;
    }
}