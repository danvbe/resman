<?php
/**
 * Created by JetBrains PhpStorm.
 * User: admin
 * Date: 08.10.2012
 * Time: 11:16
 * To change this template use File | Settings | File Templates.
 */

namespace Danvbe\ResmanBundle\Entity;


class PropertyType
{

    /**
     * @var string $name the name of the property type
     */
    protected $name;

    /**
     * @var integer $data_type the data_type id
     */
    protected $data_type;

    /**
     * @var ResourceType $resource_type the resource type having this property type
     */
    protected $resource_type;

    /**
     * @var string $type the type of connection (property or identification)
     */
    protected $type;

    /**
     * @return string The name of this property type
     */
    public  function getName(){
        return $this->name;
    }

    /**
     * @param string $name the name to be set
     * @return PropertyType
     */
    public function setName($name){
        $this->name = $name;

        return $this;
    }

    /**
     * @return int the data_type id
     */
    public  function getDataType(){
        return $this->data_type;
    }

    /**
     * @param int $data_type the data_type to be set
     * @return PropertyType
     */
    public function setDataType($data_type){
        $this->data_type = $data_type;

        return $this;
    }

    /**
     * @return ResourceType The resource type of this property type
     */
    public  function getResourceType(){
        return $this->resource_type;
    }

    /**
     * @param ResourceType $resource_type the resource type to be set
     * @return PropertyType
     */
    public function setResourceType($resource_type){
        $this->resource_type = $resource_type;

        return $this;
    }

    /**
     * @return int the type id of the connection
     */
    public  function getType(){
        return $this->type;
    }

    /**
     * @param int $type the type of the connection
     * @return PropertyType
     */
    public function setType($type){
        $this->type = $type;

        return $this;
    }
}
