<?php
/**
 * PrincipalDetail
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
 * PrincipalDetail Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PrincipalDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PrincipalDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'principal_title' => 'string',
        'principal_full_name' => 'string',
        'principal_first_name' => 'string',
        'principal_middle_initial' => 'string',
        'principal_last_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'principal_title' => null,
        'principal_full_name' => null,
        'principal_first_name' => null,
        'principal_middle_initial' => null,
        'principal_last_name' => null
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
        'principal_title' => 'principalTitle',
        'principal_full_name' => 'principalFullName',
        'principal_first_name' => 'principalFirstName',
        'principal_middle_initial' => 'principalMiddleInitial',
        'principal_last_name' => 'principalLastName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'principal_title' => 'setPrincipalTitle',
        'principal_full_name' => 'setPrincipalFullName',
        'principal_first_name' => 'setPrincipalFirstName',
        'principal_middle_initial' => 'setPrincipalMiddleInitial',
        'principal_last_name' => 'setPrincipalLastName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'principal_title' => 'getPrincipalTitle',
        'principal_full_name' => 'getPrincipalFullName',
        'principal_first_name' => 'getPrincipalFirstName',
        'principal_middle_initial' => 'getPrincipalMiddleInitial',
        'principal_last_name' => 'getPrincipalLastName'
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
        $this->container['principal_title'] = isset($data['principal_title']) ? $data['principal_title'] : null;
        $this->container['principal_full_name'] = isset($data['principal_full_name']) ? $data['principal_full_name'] : null;
        $this->container['principal_first_name'] = isset($data['principal_first_name']) ? $data['principal_first_name'] : null;
        $this->container['principal_middle_initial'] = isset($data['principal_middle_initial']) ? $data['principal_middle_initial'] : null;
        $this->container['principal_last_name'] = isset($data['principal_last_name']) ? $data['principal_last_name'] : null;
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
     * Gets principal_title
     *
     * @return string
     */
    public function getPrincipalTitle()
    {
        return $this->container['principal_title'];
    }

    /**
     * Sets principal_title
     *
     * @param string $principal_title Title of first signatory on Mortgage or Deed of Trust.
     *
     * @return $this
     */
    public function setPrincipalTitle($principal_title)
    {
        $this->container['principal_title'] = $principal_title;

        return $this;
    }

    /**
     * Gets principal_full_name
     *
     * @return string
     */
    public function getPrincipalFullName()
    {
        return $this->container['principal_full_name'];
    }

    /**
     * Sets principal_full_name
     *
     * @param string $principal_full_name Full name of first signatory or Company Name on the Mortgage or Deed of Trust.
     *
     * @return $this
     */
    public function setPrincipalFullName($principal_full_name)
    {
        $this->container['principal_full_name'] = $principal_full_name;

        return $this;
    }

    /**
     * Gets principal_first_name
     *
     * @return string
     */
    public function getPrincipalFirstName()
    {
        return $this->container['principal_first_name'];
    }

    /**
     * Sets principal_first_name
     *
     * @param string $principal_first_name First name of first signatory on the Mortgage/Deed of Trust.
     *
     * @return $this
     */
    public function setPrincipalFirstName($principal_first_name)
    {
        $this->container['principal_first_name'] = $principal_first_name;

        return $this;
    }

    /**
     * Gets principal_middle_initial
     *
     * @return string
     */
    public function getPrincipalMiddleInitial()
    {
        return $this->container['principal_middle_initial'];
    }

    /**
     * Sets principal_middle_initial
     *
     * @param string $principal_middle_initial Middle Name of first signatory on the Mortgage/Deed of Trust.
     *
     * @return $this
     */
    public function setPrincipalMiddleInitial($principal_middle_initial)
    {
        $this->container['principal_middle_initial'] = $principal_middle_initial;

        return $this;
    }

    /**
     * Gets principal_last_name
     *
     * @return string
     */
    public function getPrincipalLastName()
    {
        return $this->container['principal_last_name'];
    }

    /**
     * Sets principal_last_name
     *
     * @param string $principal_last_name Last name of first signatory on the Mortgage/Deed of Trust.
     *
     * @return $this
     */
    public function setPrincipalLastName($principal_last_name)
    {
        $this->container['principal_last_name'] = $principal_last_name;

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
