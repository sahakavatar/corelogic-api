<?php
/**
 * TransactionHistoryLenderDetail
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
 * TransactionHistoryLenderDetail Class Doc Comment
 *
 * @category Class
 * @description Lender Details
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransactionHistoryLenderDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TransactionHistoryLenderDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'lender_company_code' => 'string',
        'lender_company_name' => 'string',
        'lender_full_name' => 'string',
        'lender_last_name' => 'string',
        'lender_first_name' => 'string',
        'lender_address' => 'string',
        'lender_city' => 'string',
        'lender_state' => 'string',
        'lender_zip_code' => 'string',
        'lender_post_to_code' => 'string',
        'lender_post_to_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'lender_company_code' => null,
        'lender_company_name' => null,
        'lender_full_name' => null,
        'lender_last_name' => null,
        'lender_first_name' => null,
        'lender_address' => null,
        'lender_city' => null,
        'lender_state' => null,
        'lender_zip_code' => null,
        'lender_post_to_code' => null,
        'lender_post_to_name' => null
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
        'lender_company_code' => 'lenderCompanyCode',
        'lender_company_name' => 'lenderCompanyName',
        'lender_full_name' => 'lenderFullName',
        'lender_last_name' => 'lenderLastName',
        'lender_first_name' => 'lenderFirstName',
        'lender_address' => 'lenderAddress',
        'lender_city' => 'lenderCity',
        'lender_state' => 'lenderState',
        'lender_zip_code' => 'lenderZipCode',
        'lender_post_to_code' => 'lenderPostToCode',
        'lender_post_to_name' => 'lenderPostToName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'lender_company_code' => 'setLenderCompanyCode',
        'lender_company_name' => 'setLenderCompanyName',
        'lender_full_name' => 'setLenderFullName',
        'lender_last_name' => 'setLenderLastName',
        'lender_first_name' => 'setLenderFirstName',
        'lender_address' => 'setLenderAddress',
        'lender_city' => 'setLenderCity',
        'lender_state' => 'setLenderState',
        'lender_zip_code' => 'setLenderZipCode',
        'lender_post_to_code' => 'setLenderPostToCode',
        'lender_post_to_name' => 'setLenderPostToName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'lender_company_code' => 'getLenderCompanyCode',
        'lender_company_name' => 'getLenderCompanyName',
        'lender_full_name' => 'getLenderFullName',
        'lender_last_name' => 'getLenderLastName',
        'lender_first_name' => 'getLenderFirstName',
        'lender_address' => 'getLenderAddress',
        'lender_city' => 'getLenderCity',
        'lender_state' => 'getLenderState',
        'lender_zip_code' => 'getLenderZipCode',
        'lender_post_to_code' => 'getLenderPostToCode',
        'lender_post_to_name' => 'getLenderPostToName'
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
        $this->container['lender_company_code'] = isset($data['lender_company_code']) ? $data['lender_company_code'] : null;
        $this->container['lender_company_name'] = isset($data['lender_company_name']) ? $data['lender_company_name'] : null;
        $this->container['lender_full_name'] = isset($data['lender_full_name']) ? $data['lender_full_name'] : null;
        $this->container['lender_last_name'] = isset($data['lender_last_name']) ? $data['lender_last_name'] : null;
        $this->container['lender_first_name'] = isset($data['lender_first_name']) ? $data['lender_first_name'] : null;
        $this->container['lender_address'] = isset($data['lender_address']) ? $data['lender_address'] : null;
        $this->container['lender_city'] = isset($data['lender_city']) ? $data['lender_city'] : null;
        $this->container['lender_state'] = isset($data['lender_state']) ? $data['lender_state'] : null;
        $this->container['lender_zip_code'] = isset($data['lender_zip_code']) ? $data['lender_zip_code'] : null;
        $this->container['lender_post_to_code'] = isset($data['lender_post_to_code']) ? $data['lender_post_to_code'] : null;
        $this->container['lender_post_to_name'] = isset($data['lender_post_to_name']) ? $data['lender_post_to_name'] : null;
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
     * Gets lender_company_code
     *
     * @return string
     */
    public function getLenderCompanyCode()
    {
        return $this->container['lender_company_code'];
    }

    /**
     * Sets lender_company_code
     *
     * @param string $lender_company_code CoreLogic standardized lender code that identifies the mortgage lender (e.g., Bank of America = 000003).
     *
     * @return $this
     */
    public function setLenderCompanyCode($lender_company_code)
    {
        $this->container['lender_company_code'] = $lender_company_code;

        return $this;
    }

    /**
     * Gets lender_company_name
     *
     * @return string
     */
    public function getLenderCompanyName()
    {
        return $this->container['lender_company_name'];
    }

    /**
     * Sets lender_company_name
     *
     * @param string $lender_company_name CoreLogic proprietary and standardized name of lender from CoreLogic proprietary Lender Code table.
     *
     * @return $this
     */
    public function setLenderCompanyName($lender_company_name)
    {
        $this->container['lender_company_name'] = $lender_company_name;

        return $this;
    }

    /**
     * Gets lender_full_name
     *
     * @return string
     */
    public function getLenderFullName()
    {
        return $this->container['lender_full_name'];
    }

    /**
     * Sets lender_full_name
     *
     * @param string $lender_full_name Full name of Lender as recorded on the original document when no CoreLogic Lender Company Code exists.
     *
     * @return $this
     */
    public function setLenderFullName($lender_full_name)
    {
        $this->container['lender_full_name'] = $lender_full_name;

        return $this;
    }

    /**
     * Gets lender_last_name
     *
     * @return string
     */
    public function getLenderLastName()
    {
        return $this->container['lender_last_name'];
    }

    /**
     * Sets lender_last_name
     *
     * @param string $lender_last_name Name of Lender's Last Name as recorded on the original document when Lender is a Private Party.
     *
     * @return $this
     */
    public function setLenderLastName($lender_last_name)
    {
        $this->container['lender_last_name'] = $lender_last_name;

        return $this;
    }

    /**
     * Gets lender_first_name
     *
     * @return string
     */
    public function getLenderFirstName()
    {
        return $this->container['lender_first_name'];
    }

    /**
     * Sets lender_first_name
     *
     * @param string $lender_first_name Name of Lender's First Name as recorded on the original document when Lender is a Private Party.
     *
     * @return $this
     */
    public function setLenderFirstName($lender_first_name)
    {
        $this->container['lender_first_name'] = $lender_first_name;

        return $this;
    }

    /**
     * Gets lender_address
     *
     * @return string
     */
    public function getLenderAddress()
    {
        return $this->container['lender_address'];
    }

    /**
     * Sets lender_address
     *
     * @param string $lender_address Address of the Lender as recorded on the original document.
     *
     * @return $this
     */
    public function setLenderAddress($lender_address)
    {
        $this->container['lender_address'] = $lender_address;

        return $this;
    }

    /**
     * Gets lender_city
     *
     * @return string
     */
    public function getLenderCity()
    {
        return $this->container['lender_city'];
    }

    /**
     * Sets lender_city
     *
     * @param string $lender_city Lender City as recorded on the original document.
     *
     * @return $this
     */
    public function setLenderCity($lender_city)
    {
        $this->container['lender_city'] = $lender_city;

        return $this;
    }

    /**
     * Gets lender_state
     *
     * @return string
     */
    public function getLenderState()
    {
        return $this->container['lender_state'];
    }

    /**
     * Sets lender_state
     *
     * @param string $lender_state Lender State as recorded on the original document.
     *
     * @return $this
     */
    public function setLenderState($lender_state)
    {
        $this->container['lender_state'] = $lender_state;

        return $this;
    }

    /**
     * Gets lender_zip_code
     *
     * @return string
     */
    public function getLenderZipCode()
    {
        return $this->container['lender_zip_code'];
    }

    /**
     * Sets lender_zip_code
     *
     * @param string $lender_zip_code Lender ZIP code as recorded on the original document.
     *
     * @return $this
     */
    public function setLenderZipCode($lender_zip_code)
    {
        $this->container['lender_zip_code'] = $lender_zip_code;

        return $this;
    }

    /**
     * Gets lender_post_to_code
     *
     * @return string
     */
    public function getLenderPostToCode()
    {
        return $this->container['lender_post_to_code'];
    }

    /**
     * Sets lender_post_to_code
     *
     * @param string $lender_post_to_code Standardized grouped Lender Code when 2 or more Lender Name variations exist or when CoreLogic aggregates smaller lenders into a single group (Ex. 000252.)
     *
     * @return $this
     */
    public function setLenderPostToCode($lender_post_to_code)
    {
        $this->container['lender_post_to_code'] = $lender_post_to_code;

        return $this;
    }

    /**
     * Gets lender_post_to_name
     *
     * @return string
     */
    public function getLenderPostToName()
    {
        return $this->container['lender_post_to_name'];
    }

    /**
     * Sets lender_post_to_name
     *
     * @param string $lender_post_to_name Corresponding Lender Name that correlates with Lender Post-To Code. (Ex. 000252 matches to Other Institution Lenders.)
     *
     * @return $this
     */
    public function setLenderPostToName($lender_post_to_name)
    {
        $this->container['lender_post_to_name'] = $lender_post_to_name;

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
