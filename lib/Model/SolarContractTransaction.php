<?php
/**
 * SolarContractTransaction
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
 * SolarContractTransaction Class Doc Comment
 *
 * @category Class
 * @description Solar Contract Transaction
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SolarContractTransaction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SolarContractTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'solar_contract_transaction_id' => '\Swagger\Client\Model\SolarContractTransactionId',
        'owner_name' => '\Swagger\Client\Model\SolarPaceLiensOwnerName[]',
        'owner_mailing_address' => '\Swagger\Client\Model\OwnerMailingAddress',
        'solar_contract_transaction' => '\Swagger\Client\Model\SolarContractTransactionDetails',
        'solar_contract_details' => '\Swagger\Client\Model\SolarContractDetails',
        'solar_requester_name' => '\Swagger\Client\Model\SolarRequesterName',
        'solar_requester_address' => '\Swagger\Client\Model\SolarRequesterAddress',
        'original_solar_transaction' => '\Swagger\Client\Model\OriginalSolarTransaction'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'solar_contract_transaction_id' => null,
        'owner_name' => null,
        'owner_mailing_address' => null,
        'solar_contract_transaction' => null,
        'solar_contract_details' => null,
        'solar_requester_name' => null,
        'solar_requester_address' => null,
        'original_solar_transaction' => null
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
        'solar_contract_transaction_id' => 'solarContractTransactionId',
        'owner_name' => 'ownerName',
        'owner_mailing_address' => 'ownerMailingAddress',
        'solar_contract_transaction' => 'solarContractTransaction',
        'solar_contract_details' => 'solarContractDetails',
        'solar_requester_name' => 'solarRequesterName',
        'solar_requester_address' => 'solarRequesterAddress',
        'original_solar_transaction' => 'originalSolarTransaction'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'solar_contract_transaction_id' => 'setSolarContractTransactionId',
        'owner_name' => 'setOwnerName',
        'owner_mailing_address' => 'setOwnerMailingAddress',
        'solar_contract_transaction' => 'setSolarContractTransaction',
        'solar_contract_details' => 'setSolarContractDetails',
        'solar_requester_name' => 'setSolarRequesterName',
        'solar_requester_address' => 'setSolarRequesterAddress',
        'original_solar_transaction' => 'setOriginalSolarTransaction'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'solar_contract_transaction_id' => 'getSolarContractTransactionId',
        'owner_name' => 'getOwnerName',
        'owner_mailing_address' => 'getOwnerMailingAddress',
        'solar_contract_transaction' => 'getSolarContractTransaction',
        'solar_contract_details' => 'getSolarContractDetails',
        'solar_requester_name' => 'getSolarRequesterName',
        'solar_requester_address' => 'getSolarRequesterAddress',
        'original_solar_transaction' => 'getOriginalSolarTransaction'
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
        $this->container['solar_contract_transaction_id'] = isset($data['solar_contract_transaction_id']) ? $data['solar_contract_transaction_id'] : null;
        $this->container['owner_name'] = isset($data['owner_name']) ? $data['owner_name'] : null;
        $this->container['owner_mailing_address'] = isset($data['owner_mailing_address']) ? $data['owner_mailing_address'] : null;
        $this->container['solar_contract_transaction'] = isset($data['solar_contract_transaction']) ? $data['solar_contract_transaction'] : null;
        $this->container['solar_contract_details'] = isset($data['solar_contract_details']) ? $data['solar_contract_details'] : null;
        $this->container['solar_requester_name'] = isset($data['solar_requester_name']) ? $data['solar_requester_name'] : null;
        $this->container['solar_requester_address'] = isset($data['solar_requester_address']) ? $data['solar_requester_address'] : null;
        $this->container['original_solar_transaction'] = isset($data['original_solar_transaction']) ? $data['original_solar_transaction'] : null;
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
     * Gets solar_contract_transaction_id
     *
     * @return \Swagger\Client\Model\SolarContractTransactionId
     */
    public function getSolarContractTransactionId()
    {
        return $this->container['solar_contract_transaction_id'];
    }

    /**
     * Sets solar_contract_transaction_id
     *
     * @param \Swagger\Client\Model\SolarContractTransactionId $solar_contract_transaction_id solar_contract_transaction_id
     *
     * @return $this
     */
    public function setSolarContractTransactionId($solar_contract_transaction_id)
    {
        $this->container['solar_contract_transaction_id'] = $solar_contract_transaction_id;

        return $this;
    }

    /**
     * Gets owner_name
     *
     * @return \Swagger\Client\Model\SolarPaceLiensOwnerName[]
     */
    public function getOwnerName()
    {
        return $this->container['owner_name'];
    }

    /**
     * Sets owner_name
     *
     * @param \Swagger\Client\Model\SolarPaceLiensOwnerName[] $owner_name owner_name
     *
     * @return $this
     */
    public function setOwnerName($owner_name)
    {
        $this->container['owner_name'] = $owner_name;

        return $this;
    }

    /**
     * Gets owner_mailing_address
     *
     * @return \Swagger\Client\Model\OwnerMailingAddress
     */
    public function getOwnerMailingAddress()
    {
        return $this->container['owner_mailing_address'];
    }

    /**
     * Sets owner_mailing_address
     *
     * @param \Swagger\Client\Model\OwnerMailingAddress $owner_mailing_address owner_mailing_address
     *
     * @return $this
     */
    public function setOwnerMailingAddress($owner_mailing_address)
    {
        $this->container['owner_mailing_address'] = $owner_mailing_address;

        return $this;
    }

    /**
     * Gets solar_contract_transaction
     *
     * @return \Swagger\Client\Model\SolarContractTransactionDetails
     */
    public function getSolarContractTransaction()
    {
        return $this->container['solar_contract_transaction'];
    }

    /**
     * Sets solar_contract_transaction
     *
     * @param \Swagger\Client\Model\SolarContractTransactionDetails $solar_contract_transaction solar_contract_transaction
     *
     * @return $this
     */
    public function setSolarContractTransaction($solar_contract_transaction)
    {
        $this->container['solar_contract_transaction'] = $solar_contract_transaction;

        return $this;
    }

    /**
     * Gets solar_contract_details
     *
     * @return \Swagger\Client\Model\SolarContractDetails
     */
    public function getSolarContractDetails()
    {
        return $this->container['solar_contract_details'];
    }

    /**
     * Sets solar_contract_details
     *
     * @param \Swagger\Client\Model\SolarContractDetails $solar_contract_details solar_contract_details
     *
     * @return $this
     */
    public function setSolarContractDetails($solar_contract_details)
    {
        $this->container['solar_contract_details'] = $solar_contract_details;

        return $this;
    }

    /**
     * Gets solar_requester_name
     *
     * @return \Swagger\Client\Model\SolarRequesterName
     */
    public function getSolarRequesterName()
    {
        return $this->container['solar_requester_name'];
    }

    /**
     * Sets solar_requester_name
     *
     * @param \Swagger\Client\Model\SolarRequesterName $solar_requester_name solar_requester_name
     *
     * @return $this
     */
    public function setSolarRequesterName($solar_requester_name)
    {
        $this->container['solar_requester_name'] = $solar_requester_name;

        return $this;
    }

    /**
     * Gets solar_requester_address
     *
     * @return \Swagger\Client\Model\SolarRequesterAddress
     */
    public function getSolarRequesterAddress()
    {
        return $this->container['solar_requester_address'];
    }

    /**
     * Sets solar_requester_address
     *
     * @param \Swagger\Client\Model\SolarRequesterAddress $solar_requester_address solar_requester_address
     *
     * @return $this
     */
    public function setSolarRequesterAddress($solar_requester_address)
    {
        $this->container['solar_requester_address'] = $solar_requester_address;

        return $this;
    }

    /**
     * Gets original_solar_transaction
     *
     * @return \Swagger\Client\Model\OriginalSolarTransaction
     */
    public function getOriginalSolarTransaction()
    {
        return $this->container['original_solar_transaction'];
    }

    /**
     * Sets original_solar_transaction
     *
     * @param \Swagger\Client\Model\OriginalSolarTransaction $original_solar_transaction original_solar_transaction
     *
     * @return $this
     */
    public function setOriginalSolarTransaction($original_solar_transaction)
    {
        $this->container['original_solar_transaction'] = $original_solar_transaction;

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
