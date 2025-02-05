<?php
/**
 * TransactionHistoryBorrowerNameDetail
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
 * TransactionHistoryBorrowerNameDetail Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransactionHistoryBorrowerNameDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TransactionHistoryBorrowerNameDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sequence_id' => 'int',
        'borrower_full_name' => 'string',
        'borrower_first_name' => 'string',
        'borrower_middle_initial' => 'string',
        'borrower_last_name' => 'string',
        'borrower_corporate_indicator' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sequence_id' => 'int32',
        'borrower_full_name' => null,
        'borrower_first_name' => null,
        'borrower_middle_initial' => null,
        'borrower_last_name' => null,
        'borrower_corporate_indicator' => null
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
        'sequence_id' => 'sequenceId',
        'borrower_full_name' => 'borrowerFullName',
        'borrower_first_name' => 'borrowerFirstName',
        'borrower_middle_initial' => 'borrowerMiddleInitial',
        'borrower_last_name' => 'borrowerLastName',
        'borrower_corporate_indicator' => 'borrowerCorporateIndicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sequence_id' => 'setSequenceId',
        'borrower_full_name' => 'setBorrowerFullName',
        'borrower_first_name' => 'setBorrowerFirstName',
        'borrower_middle_initial' => 'setBorrowerMiddleInitial',
        'borrower_last_name' => 'setBorrowerLastName',
        'borrower_corporate_indicator' => 'setBorrowerCorporateIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sequence_id' => 'getSequenceId',
        'borrower_full_name' => 'getBorrowerFullName',
        'borrower_first_name' => 'getBorrowerFirstName',
        'borrower_middle_initial' => 'getBorrowerMiddleInitial',
        'borrower_last_name' => 'getBorrowerLastName',
        'borrower_corporate_indicator' => 'getBorrowerCorporateIndicator'
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
        $this->container['sequence_id'] = isset($data['sequence_id']) ? $data['sequence_id'] : null;
        $this->container['borrower_full_name'] = isset($data['borrower_full_name']) ? $data['borrower_full_name'] : null;
        $this->container['borrower_first_name'] = isset($data['borrower_first_name']) ? $data['borrower_first_name'] : null;
        $this->container['borrower_middle_initial'] = isset($data['borrower_middle_initial']) ? $data['borrower_middle_initial'] : null;
        $this->container['borrower_last_name'] = isset($data['borrower_last_name']) ? $data['borrower_last_name'] : null;
        $this->container['borrower_corporate_indicator'] = isset($data['borrower_corporate_indicator']) ? $data['borrower_corporate_indicator'] : null;
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
     * Gets sequence_id
     *
     * @return int
     */
    public function getSequenceId()
    {
        return $this->container['sequence_id'];
    }

    /**
     * Sets sequence_id
     *
     * @param int $sequence_id If there are multiple borrowers, the sequenceNumber begins with 1 for the first borrower and increases by one for each additional property buyer.
     *
     * @return $this
     */
    public function setSequenceId($sequence_id)
    {
        $this->container['sequence_id'] = $sequence_id;

        return $this;
    }

    /**
     * Gets borrower_full_name
     *
     * @return string
     */
    public function getBorrowerFullName()
    {
        return $this->container['borrower_full_name'];
    }

    /**
     * Sets borrower_full_name
     *
     * @param string $borrower_full_name Full Name of the BORROWER at the time of the transaction.
     *
     * @return $this
     */
    public function setBorrowerFullName($borrower_full_name)
    {
        $this->container['borrower_full_name'] = $borrower_full_name;

        return $this;
    }

    /**
     * Gets borrower_first_name
     *
     * @return string
     */
    public function getBorrowerFirstName()
    {
        return $this->container['borrower_first_name'];
    }

    /**
     * Sets borrower_first_name
     *
     * @param string $borrower_first_name First Name of the BORROWER at the time of the transaction.
     *
     * @return $this
     */
    public function setBorrowerFirstName($borrower_first_name)
    {
        $this->container['borrower_first_name'] = $borrower_first_name;

        return $this;
    }

    /**
     * Gets borrower_middle_initial
     *
     * @return string
     */
    public function getBorrowerMiddleInitial()
    {
        return $this->container['borrower_middle_initial'];
    }

    /**
     * Sets borrower_middle_initial
     *
     * @param string $borrower_middle_initial Middle Initial of the BORROWER at the time of the transaction.
     *
     * @return $this
     */
    public function setBorrowerMiddleInitial($borrower_middle_initial)
    {
        $this->container['borrower_middle_initial'] = $borrower_middle_initial;

        return $this;
    }

    /**
     * Gets borrower_last_name
     *
     * @return string
     */
    public function getBorrowerLastName()
    {
        return $this->container['borrower_last_name'];
    }

    /**
     * Sets borrower_last_name
     *
     * @param string $borrower_last_name Last name of the BORROWER at the time of the transaction.
     *
     * @return $this
     */
    public function setBorrowerLastName($borrower_last_name)
    {
        $this->container['borrower_last_name'] = $borrower_last_name;

        return $this;
    }

    /**
     * Gets borrower_corporate_indicator
     *
     * @return string
     */
    public function getBorrowerCorporateIndicator()
    {
        return $this->container['borrower_corporate_indicator'];
    }

    /**
     * Sets borrower_corporate_indicator
     *
     * @param string $borrower_corporate_indicator Indicator that the BORROWER has been recognized as a corporation or business.
     *
     * @return $this
     */
    public function setBorrowerCorporateIndicator($borrower_corporate_indicator)
    {
        $this->container['borrower_corporate_indicator'] = $borrower_corporate_indicator;

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
