<?php
/**
 * PropertyAddressMatchInformation
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
 * PropertyAddressMatchInformation Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PropertyAddressMatchInformation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PropertyAddressMatchInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'property_match_score' => 'int',
        'result_code' => 'string',
        'match_code' => 'string',
        'address_type' => 'string',
        'address_match_code' => 'string',
        'address_match_code_description' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'property_match_score' => 'int32',
        'result_code' => null,
        'match_code' => null,
        'address_type' => null,
        'address_match_code' => null,
        'address_match_code_description' => null
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
        'property_match_score' => 'propertyMatchScore',
        'result_code' => 'resultCode',
        'match_code' => 'matchCode',
        'address_type' => 'addressType',
        'address_match_code' => 'addressMatchCode',
        'address_match_code_description' => 'addressMatchCodeDescription'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'property_match_score' => 'setPropertyMatchScore',
        'result_code' => 'setResultCode',
        'match_code' => 'setMatchCode',
        'address_type' => 'setAddressType',
        'address_match_code' => 'setAddressMatchCode',
        'address_match_code_description' => 'setAddressMatchCodeDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'property_match_score' => 'getPropertyMatchScore',
        'result_code' => 'getResultCode',
        'match_code' => 'getMatchCode',
        'address_type' => 'getAddressType',
        'address_match_code' => 'getAddressMatchCode',
        'address_match_code_description' => 'getAddressMatchCodeDescription'
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
        $this->container['property_match_score'] = isset($data['property_match_score']) ? $data['property_match_score'] : null;
        $this->container['result_code'] = isset($data['result_code']) ? $data['result_code'] : null;
        $this->container['match_code'] = isset($data['match_code']) ? $data['match_code'] : null;
        $this->container['address_type'] = isset($data['address_type']) ? $data['address_type'] : null;
        $this->container['address_match_code'] = isset($data['address_match_code']) ? $data['address_match_code'] : null;
        $this->container['address_match_code_description'] = isset($data['address_match_code_description']) ? $data['address_match_code_description'] : null;
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
     * Gets property_match_score
     *
     * @return int
     */
    public function getPropertyMatchScore()
    {
        return $this->container['property_match_score'];
    }

    /**
     * Sets property_match_score
     *
     * @param int $property_match_score Score ranging from 0 to 10 indicating the quality of the match between the request information and the found property information. Refer to Property Search User Guide for additional information.
     *
     * @return $this
     */
    public function setPropertyMatchScore($property_match_score)
    {
        $this->container['property_match_score'] = $property_match_score;

        return $this;
    }

    /**
     * Gets result_code
     *
     * @return string
     */
    public function getResultCode()
    {
        return $this->container['result_code'];
    }

    /**
     * Sets result_code
     *
     * @param string $result_code CoreLogic standardized result of the lookup match based on the input property address information. Refer to Property Search User Guide Appendix B for additional information.
     *
     * @return $this
     */
    public function setResultCode($result_code)
    {
        $this->container['result_code'] = $result_code;

        return $this;
    }

    /**
     * Gets match_code
     *
     * @return string
     */
    public function getMatchCode()
    {
        return $this->container['match_code'];
    }

    /**
     * Sets match_code
     *
     * @param string $match_code CoreLogic standardized code detailing how the provided property information (Address, APN, CLIP, Geocode) matched the found property. Refer to Property Search User Guide Appendix C for additional information.
     *
     * @return $this
     */
    public function setMatchCode($match_code)
    {
        $this->container['match_code'] = $match_code;

        return $this;
    }

    /**
     * Gets address_type
     *
     * @return string
     */
    public function getAddressType()
    {
        return $this->container['address_type'];
    }

    /**
     * Sets address_type
     *
     * @param string $address_type The type of address identified by the CLIP system. Refer to Property Search User Guide for additional information.
     *
     * @return $this
     */
    public function setAddressType($address_type)
    {
        $this->container['address_type'] = $address_type;

        return $this;
    }

    /**
     * Gets address_match_code
     *
     * @return string
     */
    public function getAddressMatchCode()
    {
        return $this->container['address_match_code'];
    }

    /**
     * Sets address_match_code
     *
     * @param string $address_match_code CoreLogic standardized code defining the parameters of the address and latitude/longitude for the property found based on the customer input.
     *
     * @return $this
     */
    public function setAddressMatchCode($address_match_code)
    {
        $this->container['address_match_code'] = $address_match_code;

        return $this;
    }

    /**
     * Gets address_match_code_description
     *
     * @return string
     */
    public function getAddressMatchCodeDescription()
    {
        return $this->container['address_match_code_description'];
    }

    /**
     * Sets address_match_code_description
     *
     * @param string $address_match_code_description Textual description of the CoreLogic standardized address match code.
     *
     * @return $this
     */
    public function setAddressMatchCodeDescription($address_match_code_description)
    {
        $this->container['address_match_code_description'] = $address_match_code_description;

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
