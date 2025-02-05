<?php
/**
 * PropertyStreetAddressParsed
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
 * PropertyStreetAddressParsed Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PropertyStreetAddressParsed implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PropertyStreetAddressParsed';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'house_number' => 'string',
        'street_name_prefix_dir' => 'string',
        'street_name' => 'string',
        'street_name_suffix' => 'string',
        'street_name_suffix_dir' => 'string',
        'unit_type' => 'string',
        'unit_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'house_number' => null,
        'street_name_prefix_dir' => null,
        'street_name' => null,
        'street_name_suffix' => null,
        'street_name_suffix_dir' => null,
        'unit_type' => null,
        'unit_number' => null
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
        'house_number' => 'houseNumber',
        'street_name_prefix_dir' => 'streetNamePrefixDir',
        'street_name' => 'streetName',
        'street_name_suffix' => 'streetNameSuffix',
        'street_name_suffix_dir' => 'streetNameSuffixDir',
        'unit_type' => 'unitType',
        'unit_number' => 'unitNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'house_number' => 'setHouseNumber',
        'street_name_prefix_dir' => 'setStreetNamePrefixDir',
        'street_name' => 'setStreetName',
        'street_name_suffix' => 'setStreetNameSuffix',
        'street_name_suffix_dir' => 'setStreetNameSuffixDir',
        'unit_type' => 'setUnitType',
        'unit_number' => 'setUnitNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'house_number' => 'getHouseNumber',
        'street_name_prefix_dir' => 'getStreetNamePrefixDir',
        'street_name' => 'getStreetName',
        'street_name_suffix' => 'getStreetNameSuffix',
        'street_name_suffix_dir' => 'getStreetNameSuffixDir',
        'unit_type' => 'getUnitType',
        'unit_number' => 'getUnitNumber'
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
        $this->container['house_number'] = isset($data['house_number']) ? $data['house_number'] : null;
        $this->container['street_name_prefix_dir'] = isset($data['street_name_prefix_dir']) ? $data['street_name_prefix_dir'] : null;
        $this->container['street_name'] = isset($data['street_name']) ? $data['street_name'] : null;
        $this->container['street_name_suffix'] = isset($data['street_name_suffix']) ? $data['street_name_suffix'] : null;
        $this->container['street_name_suffix_dir'] = isset($data['street_name_suffix_dir']) ? $data['street_name_suffix_dir'] : null;
        $this->container['unit_type'] = isset($data['unit_type']) ? $data['unit_type'] : null;
        $this->container['unit_number'] = isset($data['unit_number']) ? $data['unit_number'] : null;
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
     * Gets house_number
     *
     * @return string
     */
    public function getHouseNumber()
    {
        return $this->container['house_number'];
    }

    /**
     * Sets house_number
     *
     * @param string $house_number CoreLogic standardized house number, usually the digits or letters found to the left of a street name in an address
     *
     * @return $this
     */
    public function setHouseNumber($house_number)
    {
        $this->container['house_number'] = $house_number;

        return $this;
    }

    /**
     * Gets street_name_prefix_dir
     *
     * @return string
     */
    public function getStreetNamePrefixDir()
    {
        return $this->container['street_name_prefix_dir'];
    }

    /**
     * Sets street_name_prefix_dir
     *
     * @param string $street_name_prefix_dir CoreLogic standardized field that represents the direction found to the left of the street name (e.g. 9340 N Dunhill Dr). Also know as Pre-Directional.
     *
     * @return $this
     */
    public function setStreetNamePrefixDir($street_name_prefix_dir)
    {
        $this->container['street_name_prefix_dir'] = $street_name_prefix_dir;

        return $this;
    }

    /**
     * Gets street_name
     *
     * @return string
     */
    public function getStreetName()
    {
        return $this->container['street_name'];
    }

    /**
     * Sets street_name
     *
     * @param string $street_name CoreLogic standardized name or number of the street where a parcel is located, this includes any prefixes that are considered to be part of the street name (e.g. Via De Luna, 34th).
     *
     * @return $this
     */
    public function setStreetName($street_name)
    {
        $this->container['street_name'] = $street_name;

        return $this;
    }

    /**
     * Gets street_name_suffix
     *
     * @return string
     */
    public function getStreetNameSuffix()
    {
        return $this->container['street_name_suffix'];
    }

    /**
     * Sets street_name_suffix
     *
     * @param string $street_name_suffix CoreLogic standardized mode or type of street found to the right of the street name such as Drive, avenue, parkway (e.g., 9340 N Dunhill Dr). Also known as Street Designators / Street modes
     *
     * @return $this
     */
    public function setStreetNameSuffix($street_name_suffix)
    {
        $this->container['street_name_suffix'] = $street_name_suffix;

        return $this;
    }

    /**
     * Gets street_name_suffix_dir
     *
     * @return string
     */
    public function getStreetNameSuffixDir()
    {
        return $this->container['street_name_suffix_dir'];
    }

    /**
     * Sets street_name_suffix_dir
     *
     * @param string $street_name_suffix_dir CoreLogic standardized direction indicator that follows the listed property's street name and street mode. Examples: SW following the street number and name in the address, 505 Dean St. SW. Also known as Post Directional.
     *
     * @return $this
     */
    public function setStreetNameSuffixDir($street_name_suffix_dir)
    {
        $this->container['street_name_suffix_dir'] = $street_name_suffix_dir;

        return $this;
    }

    /**
     * Gets unit_type
     *
     * @return string
     */
    public function getUnitType()
    {
        return $this->container['unit_type'];
    }

    /**
     * Sets unit_type
     *
     * @param string $unit_type The unit type of the property adress ( e.g. Apartment, unit)
     *
     * @return $this
     */
    public function setUnitType($unit_type)
    {
        $this->container['unit_type'] = $unit_type;

        return $this;
    }

    /**
     * Gets unit_number
     *
     * @return string
     */
    public function getUnitNumber()
    {
        return $this->container['unit_number'];
    }

    /**
     * Sets unit_number
     *
     * @param string $unit_number The unit or suite number of the property address (e.g., 649 Lake Shore Dr #1400).
     *
     * @return $this
     */
    public function setUnitNumber($unit_number)
    {
        $this->container['unit_number'] = $unit_number;

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
