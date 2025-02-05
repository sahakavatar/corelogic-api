<?php
/**
 * EnrichedLienRiskEquity
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
 * EnrichedLienRiskEquity Class Doc Comment
 *
 * @category Class
 * @description Enriched Lien equity and LTV
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EnrichedLienRiskEquity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EnrichedLienRiskEquity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'purchase_recording_date' => 'int',
        'purchase_amount' => 'float',
        'total_number_of_open_mortgage_liens' => 'int',
        'total_amount_of_open_mortgage_liens' => 'float',
        'purchase_combined_ltv' => 'float',
        'estimated_equity' => 'float',
        'estimated_combined_ltv' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'purchase_recording_date' => 'int32',
        'purchase_amount' => null,
        'total_number_of_open_mortgage_liens' => 'int32',
        'total_amount_of_open_mortgage_liens' => null,
        'purchase_combined_ltv' => null,
        'estimated_equity' => null,
        'estimated_combined_ltv' => null
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
        'purchase_recording_date' => 'purchaseRecordingDate',
        'purchase_amount' => 'purchaseAmount',
        'total_number_of_open_mortgage_liens' => 'totalNumberOfOpenMortgageLiens',
        'total_amount_of_open_mortgage_liens' => 'totalAmountOfOpenMortgageLiens',
        'purchase_combined_ltv' => 'purchaseCombinedLTV',
        'estimated_equity' => 'estimatedEquity',
        'estimated_combined_ltv' => 'estimatedCombinedLTV'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'purchase_recording_date' => 'setPurchaseRecordingDate',
        'purchase_amount' => 'setPurchaseAmount',
        'total_number_of_open_mortgage_liens' => 'setTotalNumberOfOpenMortgageLiens',
        'total_amount_of_open_mortgage_liens' => 'setTotalAmountOfOpenMortgageLiens',
        'purchase_combined_ltv' => 'setPurchaseCombinedLtv',
        'estimated_equity' => 'setEstimatedEquity',
        'estimated_combined_ltv' => 'setEstimatedCombinedLtv'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'purchase_recording_date' => 'getPurchaseRecordingDate',
        'purchase_amount' => 'getPurchaseAmount',
        'total_number_of_open_mortgage_liens' => 'getTotalNumberOfOpenMortgageLiens',
        'total_amount_of_open_mortgage_liens' => 'getTotalAmountOfOpenMortgageLiens',
        'purchase_combined_ltv' => 'getPurchaseCombinedLtv',
        'estimated_equity' => 'getEstimatedEquity',
        'estimated_combined_ltv' => 'getEstimatedCombinedLtv'
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
        $this->container['purchase_recording_date'] = isset($data['purchase_recording_date']) ? $data['purchase_recording_date'] : null;
        $this->container['purchase_amount'] = isset($data['purchase_amount']) ? $data['purchase_amount'] : null;
        $this->container['total_number_of_open_mortgage_liens'] = isset($data['total_number_of_open_mortgage_liens']) ? $data['total_number_of_open_mortgage_liens'] : null;
        $this->container['total_amount_of_open_mortgage_liens'] = isset($data['total_amount_of_open_mortgage_liens']) ? $data['total_amount_of_open_mortgage_liens'] : null;
        $this->container['purchase_combined_ltv'] = isset($data['purchase_combined_ltv']) ? $data['purchase_combined_ltv'] : null;
        $this->container['estimated_equity'] = isset($data['estimated_equity']) ? $data['estimated_equity'] : null;
        $this->container['estimated_combined_ltv'] = isset($data['estimated_combined_ltv']) ? $data['estimated_combined_ltv'] : null;
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
     * Gets purchase_recording_date
     *
     * @return int
     */
    public function getPurchaseRecordingDate()
    {
        return $this->container['purchase_recording_date'];
    }

    /**
     * Sets purchase_recording_date
     *
     * @param int $purchase_recording_date Date the most recent purchase of the property was recorded at the county. Format: YYYYMMDD.
     *
     * @return $this
     */
    public function setPurchaseRecordingDate($purchase_recording_date)
    {
        $this->container['purchase_recording_date'] = $purchase_recording_date;

        return $this;
    }

    /**
     * Gets purchase_amount
     *
     * @return float
     */
    public function getPurchaseAmount()
    {
        return $this->container['purchase_amount'];
    }

    /**
     * Sets purchase_amount
     *
     * @param float $purchase_amount Dollar amount of the most recent purchase of the property.
     *
     * @return $this
     */
    public function setPurchaseAmount($purchase_amount)
    {
        $this->container['purchase_amount'] = $purchase_amount;

        return $this;
    }

    /**
     * Gets total_number_of_open_mortgage_liens
     *
     * @return int
     */
    public function getTotalNumberOfOpenMortgageLiens()
    {
        return $this->container['total_number_of_open_mortgage_liens'];
    }

    /**
     * Sets total_number_of_open_mortgage_liens
     *
     * @param int $total_number_of_open_mortgage_liens Total number of open mortgage liens against the property.
     *
     * @return $this
     */
    public function setTotalNumberOfOpenMortgageLiens($total_number_of_open_mortgage_liens)
    {
        $this->container['total_number_of_open_mortgage_liens'] = $total_number_of_open_mortgage_liens;

        return $this;
    }

    /**
     * Gets total_amount_of_open_mortgage_liens
     *
     * @return float
     */
    public function getTotalAmountOfOpenMortgageLiens()
    {
        return $this->container['total_amount_of_open_mortgage_liens'];
    }

    /**
     * Sets total_amount_of_open_mortgage_liens
     *
     * @param float $total_amount_of_open_mortgage_liens Sum total of origination amounts of open mortgage liens against the property.
     *
     * @return $this
     */
    public function setTotalAmountOfOpenMortgageLiens($total_amount_of_open_mortgage_liens)
    {
        $this->container['total_amount_of_open_mortgage_liens'] = $total_amount_of_open_mortgage_liens;

        return $this;
    }

    /**
     * Gets purchase_combined_ltv
     *
     * @return float
     */
    public function getPurchaseCombinedLtv()
    {
        return $this->container['purchase_combined_ltv'];
    }

    /**
     * Sets purchase_combined_ltv
     *
     * @param float $purchase_combined_ltv Ratio of the sum amount of all open liens at time of purchase divided by the sale amount. Value expressed as a percentage.
     *
     * @return $this
     */
    public function setPurchaseCombinedLtv($purchase_combined_ltv)
    {
        $this->container['purchase_combined_ltv'] = $purchase_combined_ltv;

        return $this;
    }

    /**
     * Gets estimated_equity
     *
     * @return float
     */
    public function getEstimatedEquity()
    {
        return $this->container['estimated_equity'];
    }

    /**
     * Sets estimated_equity
     *
     * @param float $estimated_equity Estimated difference between current AVM value and the sum of all open, original loan amounts, for all open liens.  Uses THVx for Risk Management AVM that provides high level of accuracy and hit rate combination for quality control, workflow, new portfolio evaluation, and other risk management uses.
     *
     * @return $this
     */
    public function setEstimatedEquity($estimated_equity)
    {
        $this->container['estimated_equity'] = $estimated_equity;

        return $this;
    }

    /**
     * Gets estimated_combined_ltv
     *
     * @return float
     */
    public function getEstimatedCombinedLtv()
    {
        return $this->container['estimated_combined_ltv'];
    }

    /**
     * Sets estimated_combined_ltv
     *
     * @param float $estimated_combined_ltv Estimated ratio of the sum amount of all open liens at origination divided into the current AVM value. Uses THVx for AVM that provides highest hit rate for use cases. Value expressed as a percentage.
     *
     * @return $this
     */
    public function setEstimatedCombinedLtv($estimated_combined_ltv)
    {
        $this->container['estimated_combined_ltv'] = $estimated_combined_ltv;

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
