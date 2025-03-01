<?php
/**
 * ServiceDistricts
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
 * ServiceDistricts Class Doc Comment
 *
 * @category Class
 * @description Service Districts.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ServiceDistricts implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ServiceDistricts';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'fire' => '\Swagger\Client\Model\Fire',
        'trash' => '\Swagger\Client\Model\Trash',
        'lighting' => '\Swagger\Client\Model\Lighting',
        'tax' => '\Swagger\Client\Model\Tax',
        'sewer' => '\Swagger\Client\Model\Sewer',
        'utility' => '\Swagger\Client\Model\Utility',
        'water' => '\Swagger\Client\Model\Water'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'fire' => null,
        'trash' => null,
        'lighting' => null,
        'tax' => null,
        'sewer' => null,
        'utility' => null,
        'water' => null
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
        'fire' => 'fire',
        'trash' => 'trash',
        'lighting' => 'lighting',
        'tax' => 'tax',
        'sewer' => 'sewer',
        'utility' => 'utility',
        'water' => 'water'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fire' => 'setFire',
        'trash' => 'setTrash',
        'lighting' => 'setLighting',
        'tax' => 'setTax',
        'sewer' => 'setSewer',
        'utility' => 'setUtility',
        'water' => 'setWater'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fire' => 'getFire',
        'trash' => 'getTrash',
        'lighting' => 'getLighting',
        'tax' => 'getTax',
        'sewer' => 'getSewer',
        'utility' => 'getUtility',
        'water' => 'getWater'
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
        $this->container['fire'] = isset($data['fire']) ? $data['fire'] : null;
        $this->container['trash'] = isset($data['trash']) ? $data['trash'] : null;
        $this->container['lighting'] = isset($data['lighting']) ? $data['lighting'] : null;
        $this->container['tax'] = isset($data['tax']) ? $data['tax'] : null;
        $this->container['sewer'] = isset($data['sewer']) ? $data['sewer'] : null;
        $this->container['utility'] = isset($data['utility']) ? $data['utility'] : null;
        $this->container['water'] = isset($data['water']) ? $data['water'] : null;
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
     * Gets fire
     *
     * @return \Swagger\Client\Model\Fire
     */
    public function getFire()
    {
        return $this->container['fire'];
    }

    /**
     * Sets fire
     *
     * @param \Swagger\Client\Model\Fire $fire fire
     *
     * @return $this
     */
    public function setFire($fire)
    {
        $this->container['fire'] = $fire;

        return $this;
    }

    /**
     * Gets trash
     *
     * @return \Swagger\Client\Model\Trash
     */
    public function getTrash()
    {
        return $this->container['trash'];
    }

    /**
     * Sets trash
     *
     * @param \Swagger\Client\Model\Trash $trash trash
     *
     * @return $this
     */
    public function setTrash($trash)
    {
        $this->container['trash'] = $trash;

        return $this;
    }

    /**
     * Gets lighting
     *
     * @return \Swagger\Client\Model\Lighting
     */
    public function getLighting()
    {
        return $this->container['lighting'];
    }

    /**
     * Sets lighting
     *
     * @param \Swagger\Client\Model\Lighting $lighting lighting
     *
     * @return $this
     */
    public function setLighting($lighting)
    {
        $this->container['lighting'] = $lighting;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return \Swagger\Client\Model\Tax
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param \Swagger\Client\Model\Tax $tax tax
     *
     * @return $this
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets sewer
     *
     * @return \Swagger\Client\Model\Sewer
     */
    public function getSewer()
    {
        return $this->container['sewer'];
    }

    /**
     * Sets sewer
     *
     * @param \Swagger\Client\Model\Sewer $sewer sewer
     *
     * @return $this
     */
    public function setSewer($sewer)
    {
        $this->container['sewer'] = $sewer;

        return $this;
    }

    /**
     * Gets utility
     *
     * @return \Swagger\Client\Model\Utility
     */
    public function getUtility()
    {
        return $this->container['utility'];
    }

    /**
     * Sets utility
     *
     * @param \Swagger\Client\Model\Utility $utility utility
     *
     * @return $this
     */
    public function setUtility($utility)
    {
        $this->container['utility'] = $utility;

        return $this;
    }

    /**
     * Gets water
     *
     * @return \Swagger\Client\Model\Water
     */
    public function getWater()
    {
        return $this->container['water'];
    }

    /**
     * Sets water
     *
     * @param \Swagger\Client\Model\Water $water water
     *
     * @return $this
     */
    public function setWater($water)
    {
        $this->container['water'] = $water;

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
