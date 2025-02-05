<?php
/**
 * BuildingPermitsItem
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SDP Property
 *
 * SDP Property API.
 *
 * OpenAPI spec version: v2.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.66
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * BuildingPermitsItem Class Doc Comment
 *
 * @category Class
 * @description Items.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BuildingPermitsItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BuildingPermitsItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'clip' => 'string',
        'permit' => '\Swagger\Client\Model\Permit',
        'project' => '\Swagger\Client\Model\Project',
        'contractors' => '\Swagger\Client\Model\Contractor[]',
        'collection_point' => '\Swagger\Client\Model\CollectionPoint'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'clip' => null,
        'permit' => null,
        'project' => null,
        'contractors' => null,
        'collection_point' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'clip' => 'clip',
        'permit' => 'permit',
        'project' => 'project',
        'contractors' => 'contractors',
        'collection_point' => 'collectionPoint'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'clip' => 'setClip',
        'permit' => 'setPermit',
        'project' => 'setProject',
        'contractors' => 'setContractors',
        'collection_point' => 'setCollectionPoint'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'clip' => 'getClip',
        'permit' => 'getPermit',
        'project' => 'getProject',
        'contractors' => 'getContractors',
        'collection_point' => 'getCollectionPoint'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }



    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['clip'] = isset($data['clip']) ? $data['clip'] : null;
        $this->container['permit'] = isset($data['permit']) ? $data['permit'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['contractors'] = isset($data['contractors']) ? $data['contractors'] : null;
        $this->container['collection_point'] = isset($data['collection_point']) ? $data['collection_point'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets clip
     *
     * @return string
     */
    public function getClip()
    {
        return $this->container['clip'];
    }

    /**
     * Sets clip
     *
     * @param string $clip Unique identification number assigned to each property.
     *
     * @return $this
     */
    public function setClip($clip)
    {
        $this->container['clip'] = $clip;

        return $this;
    }

    /**
     * Gets permit
     *
     * @return \Swagger\Client\Model\Permit
     */
    public function getPermit()
    {
        return $this->container['permit'];
    }

    /**
     * Sets permit
     *
     * @param \Swagger\Client\Model\Permit $permit permit
     *
     * @return $this
     */
    public function setPermit($permit)
    {
        $this->container['permit'] = $permit;

        return $this;
    }

    /**
     * Gets project
     *
     * @return \Swagger\Client\Model\Project
     */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
     * Sets project
     *
     * @param \Swagger\Client\Model\Project $project project
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->container['project'] = $project;

        return $this;
    }

    /**
     * Gets contractors
     *
     * @return \Swagger\Client\Model\Contractor[]
     */
    public function getContractors()
    {
        return $this->container['contractors'];
    }

    /**
     * Sets contractors
     *
     * @param \Swagger\Client\Model\Contractor[] $contractors Contractor.
     *
     * @return $this
     */
    public function setContractors($contractors)
    {
        $this->container['contractors'] = $contractors;

        return $this;
    }

    /**
     * Gets collection_point
     *
     * @return \Swagger\Client\Model\CollectionPoint
     */
    public function getCollectionPoint()
    {
        return $this->container['collection_point'];
    }

    /**
     * Sets collection_point
     *
     * @param \Swagger\Client\Model\CollectionPoint $collection_point collection_point
     *
     * @return $this
     */
    public function setCollectionPoint($collection_point)
    {
        $this->container['collection_point'] = $collection_point;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
