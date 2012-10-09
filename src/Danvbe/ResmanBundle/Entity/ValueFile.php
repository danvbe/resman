<?php
/**
 * Created by JetBrains PhpStorm.
 * User: admin
 * Date: 28.09.2012
 * Time: 12:57
 * To change this template use File | Settings | File Templates.
 */

namespace Danvbe\ResmanBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Danvbe\ResmanBundle\Repository\ValueFileRepository")
 */
class ValueFile extends Value
{
    /**
     * @var string $value_file
     * @ORM\Column(type="string", length=255)
     */
    protected $value_file;

    /**
     * @return string The value stored in this object
     */
    public function getValue()
    {
        return $this->value_file;
    }
    /**
     * @var integer $id
     */
    protected $id;

    /**
     * @var Danvbe\ResmanBundle\Entity\Resource
     */
    protected $resource;



    ///////////////////////////////////
    //GENERATED CODE - CAN BE REMOVED//
    ///////////////////////////////////
    /**
     * Set value_file
     *
     * @param string $valueFile
     * @return ValueFile
     */
    public function setValueFile($valueFile)
    {
        $this->value_file = $valueFile;
    
        return $this;
    }

    /**
     * Get value_file
     *
     * @return string 
     */
    public function getValueFile()
    {
        return $this->value_file;
    }
}