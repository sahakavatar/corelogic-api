<?php
/**
 * BuyerDetails
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
 * BuyerDetails Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BuyerDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BuyerDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'buyer_names' => '\Swagger\Client\Model\BuyerName[]',
        'relationship_type_code' => 'string',
        'etal_code' => 'string',
        'occupancy_code' => 'string',
        'ownership_rights_code' => 'string',
        'mailing_address' => '\Swagger\Client\Model\MailingPropertyAddress',
        'has_partial_interest' => 'bool',
        'mailing_opt_out_indicator' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'buyer_names' => null,
        'relationship_type_code' => null,
        'etal_code' => null,
        'occupancy_code' => null,
        'ownership_rights_code' => null,
        'mailing_address' => null,
        'has_partial_interest' => null,
        'mailing_opt_out_indicator' => null
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
        'buyer_names' => 'buyerNames',
        'relationship_type_code' => 'relationshipTypeCode',
        'etal_code' => 'etalCode',
        'occupancy_code' => 'occupancyCode',
        'ownership_rights_code' => 'ownershipRightsCode',
        'mailing_address' => 'mailingAddress',
        'has_partial_interest' => 'hasPartialInterest',
        'mailing_opt_out_indicator' => 'mailingOptOutIndicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'buyer_names' => 'setBuyerNames',
        'relationship_type_code' => 'setRelationshipTypeCode',
        'etal_code' => 'setEtalCode',
        'occupancy_code' => 'setOccupancyCode',
        'ownership_rights_code' => 'setOwnershipRightsCode',
        'mailing_address' => 'setMailingAddress',
        'has_partial_interest' => 'setHasPartialInterest',
        'mailing_opt_out_indicator' => 'setMailingOptOutIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'buyer_names' => 'getBuyerNames',
        'relationship_type_code' => 'getRelationshipTypeCode',
        'etal_code' => 'getEtalCode',
        'occupancy_code' => 'getOccupancyCode',
        'ownership_rights_code' => 'getOwnershipRightsCode',
        'mailing_address' => 'getMailingAddress',
        'has_partial_interest' => 'getHasPartialInterest',
        'mailing_opt_out_indicator' => 'getMailingOptOutIndicator'
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
        $this->container['buyer_names'] = isset($data['buyer_names']) ? $data['buyer_names'] : null;
        $this->container['relationship_type_code'] = isset($data['relationship_type_code']) ? $data['relationship_type_code'] : null;
        $this->container['etal_code'] = isset($data['etal_code']) ? $data['etal_code'] : null;
        $this->container['occupancy_code'] = isset($data['occupancy_code']) ? $data['occupancy_code'] : null;
        $this->container['ownership_rights_code'] = isset($data['ownership_rights_code']) ? $data['ownership_rights_code'] : null;
        $this->container['mailing_address'] = isset($data['mailing_address']) ? $data['mailing_address'] : null;
        $this->container['has_partial_interest'] = isset($data['has_partial_interest']) ? $data['has_partial_interest'] : null;
        $this->container['mailing_opt_out_indicator'] = isset($data['mailing_opt_out_indicator']) ? $data['mailing_opt_out_indicator'] : null;
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
     * Gets buyer_names
     *
     * @return \Swagger\Client\Model\BuyerName[]
     */
    public function getBuyerNames()
    {
        return $this->container['buyer_names'];
    }

    /**
     * Sets buyer_names
     *
     * @param \Swagger\Client\Model\BuyerName[] $buyer_names buyer_names
     *
     * @return $this
     */
    public function setBuyerNames($buyer_names)
    {
        $this->container['buyer_names'] = $buyer_names;

        return $this;
    }

    /**
     * Gets relationship_type_code
     *
     * @return string
     */
    public function getRelationshipTypeCode()
    {
        return $this->container['relationship_type_code'];
    }

    /**
     * Sets relationship_type_code
     *
     * @param string $relationship_type_code Relationship between multiple owners or marital status.
     *
     * @return $this
     */
    public function setRelationshipTypeCode($relationship_type_code)
    {
        $this->container['relationship_type_code'] = $relationship_type_code;

        return $this;
    }

    /**
     * Gets etal_code
     *
     * @return string
     */
    public function getEtalCode()
    {
        return $this->container['etal_code'];
    }

    /**
     * Sets etal_code
     *
     * @param string $etal_code A code appearing in this field indicates additional ownership, whose name(s) were not provided by our sources. Values are: A = ET AL - AND OTHERS C = ET CON - AND HUSBAND U = ET UX - AND WIFE V = ET VIR - AND HUSBAND.
     *
     * @return $this
     */
    public function setEtalCode($etal_code)
    {
        $this->container['etal_code'] = $etal_code;

        return $this;
    }

    /**
     * Gets occupancy_code
     *
     * @return string
     */
    public function getOccupancyCode()
    {
        return $this->container['occupancy_code'];
    }

    /**
     * Sets occupancy_code
     *
     * @param string $occupancy_code CoreLogic derived code that indicates if the property buyer intends to reside  at the situs (property site). Values of M, O, and S indicate buyer occupied (A and T reflect absentee buyers).
     *
     * @return $this
     */
    public function setOccupancyCode($occupancy_code)
    {
        $this->container['occupancy_code'] = $occupancy_code;

        return $this;
    }

    /**
     * Gets ownership_rights_code
     *
     * @return string
     */
    public function getOwnershipRightsCode()
    {
        return $this->container['ownership_rights_code'];
    }

    /**
     * Sets ownership_rights_code
     *
     * @param string $ownership_rights_code Form or method of property ownership (e.g., Joint Tenants, Living Trust).
     *
     * @return $this
     */
    public function setOwnershipRightsCode($ownership_rights_code)
    {
        $this->container['ownership_rights_code'] = $ownership_rights_code;

        return $this;
    }

    /**
     * Gets mailing_address
     *
     * @return \Swagger\Client\Model\MailingPropertyAddress
     */
    public function getMailingAddress()
    {
        return $this->container['mailing_address'];
    }

    /**
     * Sets mailing_address
     *
     * @param \Swagger\Client\Model\MailingPropertyAddress $mailing_address mailing_address
     *
     * @return $this
     */
    public function setMailingAddress($mailing_address)
    {
        $this->container['mailing_address'] = $mailing_address;

        return $this;
    }

    /**
     * Gets has_partial_interest
     *
     * @return bool
     */
    public function getHasPartialInterest()
    {
        return $this->container['has_partial_interest'];
    }

    /**
     * Sets has_partial_interest
     *
     * @param bool $has_partial_interest An indicator showing the Owner/Buyer has a partial interest in the property.
     *
     * @return $this
     */
    public function setHasPartialInterest($has_partial_interest)
    {
        $this->container['has_partial_interest'] = $has_partial_interest;

        return $this;
    }

    /**
     * Gets mailing_opt_out_indicator
     *
     * @return bool
     */
    public function getMailingOptOutIndicator()
    {
        return $this->container['mailing_opt_out_indicator'];
    }

    /**
     * Sets mailing_opt_out_indicator
     *
     * @param bool $mailing_opt_out_indicator A \"Y\" represents a record where buyer has contacted the DMA (i.e., Direct Marketing Association) and has asked not to be contacted by mail for solicitation.
     *
     * @return $this
     */
    public function setMailingOptOutIndicator($mailing_opt_out_indicator)
    {
        $this->container['mailing_opt_out_indicator'] = $mailing_opt_out_indicator;

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
