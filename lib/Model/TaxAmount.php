<?php
/**
 * TaxAmount
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
 * TaxAmount Class Doc Comment
 *
 * @category Class
 * @description Tax Amount.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaxAmount implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TaxAmount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'billed_year' => 'int',
        'delinquent_year' => 'int',
        'area_code' => 'string',
        'area_code_description' => 'string',
        'property_tax_rate' => 'float',
        'calculated_total_exemption_amount' => 'float',
        'total_tax_exemption_amount' => 'float',
        'total_tax_amount' => 'float',
        'county_tax_amount' => 'float',
        'school_tax_amount' => 'float',
        'town_tax_amount' => 'float',
        'village_tax_amount' => 'float',
        'net_tax_amount' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'billed_year' => 'int32',
        'delinquent_year' => 'int32',
        'area_code' => null,
        'area_code_description' => null,
        'property_tax_rate' => null,
        'calculated_total_exemption_amount' => null,
        'total_tax_exemption_amount' => null,
        'total_tax_amount' => null,
        'county_tax_amount' => null,
        'school_tax_amount' => null,
        'town_tax_amount' => null,
        'village_tax_amount' => null,
        'net_tax_amount' => null
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
        'billed_year' => 'billedYear',
        'delinquent_year' => 'delinquentYear',
        'area_code' => 'areaCode',
        'area_code_description' => 'areaCodeDescription',
        'property_tax_rate' => 'propertyTaxRate',
        'calculated_total_exemption_amount' => 'calculatedTotalExemptionAmount',
        'total_tax_exemption_amount' => 'totalTaxExemptionAmount',
        'total_tax_amount' => 'totalTaxAmount',
        'county_tax_amount' => 'countyTaxAmount',
        'school_tax_amount' => 'schoolTaxAmount',
        'town_tax_amount' => 'townTaxAmount',
        'village_tax_amount' => 'villageTaxAmount',
        'net_tax_amount' => 'netTaxAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'billed_year' => 'setBilledYear',
        'delinquent_year' => 'setDelinquentYear',
        'area_code' => 'setAreaCode',
        'area_code_description' => 'setAreaCodeDescription',
        'property_tax_rate' => 'setPropertyTaxRate',
        'calculated_total_exemption_amount' => 'setCalculatedTotalExemptionAmount',
        'total_tax_exemption_amount' => 'setTotalTaxExemptionAmount',
        'total_tax_amount' => 'setTotalTaxAmount',
        'county_tax_amount' => 'setCountyTaxAmount',
        'school_tax_amount' => 'setSchoolTaxAmount',
        'town_tax_amount' => 'setTownTaxAmount',
        'village_tax_amount' => 'setVillageTaxAmount',
        'net_tax_amount' => 'setNetTaxAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'billed_year' => 'getBilledYear',
        'delinquent_year' => 'getDelinquentYear',
        'area_code' => 'getAreaCode',
        'area_code_description' => 'getAreaCodeDescription',
        'property_tax_rate' => 'getPropertyTaxRate',
        'calculated_total_exemption_amount' => 'getCalculatedTotalExemptionAmount',
        'total_tax_exemption_amount' => 'getTotalTaxExemptionAmount',
        'total_tax_amount' => 'getTotalTaxAmount',
        'county_tax_amount' => 'getCountyTaxAmount',
        'school_tax_amount' => 'getSchoolTaxAmount',
        'town_tax_amount' => 'getTownTaxAmount',
        'village_tax_amount' => 'getVillageTaxAmount',
        'net_tax_amount' => 'getNetTaxAmount'
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
        $this->container['billed_year'] = isset($data['billed_year']) ? $data['billed_year'] : null;
        $this->container['delinquent_year'] = isset($data['delinquent_year']) ? $data['delinquent_year'] : null;
        $this->container['area_code'] = isset($data['area_code']) ? $data['area_code'] : null;
        $this->container['area_code_description'] = isset($data['area_code_description']) ? $data['area_code_description'] : null;
        $this->container['property_tax_rate'] = isset($data['property_tax_rate']) ? $data['property_tax_rate'] : null;
        $this->container['calculated_total_exemption_amount'] = isset($data['calculated_total_exemption_amount']) ? $data['calculated_total_exemption_amount'] : null;
        $this->container['total_tax_exemption_amount'] = isset($data['total_tax_exemption_amount']) ? $data['total_tax_exemption_amount'] : null;
        $this->container['total_tax_amount'] = isset($data['total_tax_amount']) ? $data['total_tax_amount'] : null;
        $this->container['county_tax_amount'] = isset($data['county_tax_amount']) ? $data['county_tax_amount'] : null;
        $this->container['school_tax_amount'] = isset($data['school_tax_amount']) ? $data['school_tax_amount'] : null;
        $this->container['town_tax_amount'] = isset($data['town_tax_amount']) ? $data['town_tax_amount'] : null;
        $this->container['village_tax_amount'] = isset($data['village_tax_amount']) ? $data['village_tax_amount'] : null;
        $this->container['net_tax_amount'] = isset($data['net_tax_amount']) ? $data['net_tax_amount'] : null;
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
     * Gets billed_year
     *
     * @return int
     */
    public function getBilledYear()
    {
        return $this->container['billed_year'];
    }

    /**
     * Sets billed_year
     *
     * @param int $billed_year The tax year for which the taxes were billed.
     *
     * @return $this
     */
    public function setBilledYear($billed_year)
    {
        $this->container['billed_year'] = $billed_year;

        return $this;
    }

    /**
     * Gets delinquent_year
     *
     * @return int
     */
    public function getDelinquentYear()
    {
        return $this->container['delinquent_year'];
    }

    /**
     * Sets delinquent_year
     *
     * @param int $delinquent_year County provided year the delinquent property taxes were due. Format: YYYY
     *
     * @return $this
     */
    public function setDelinquentYear($delinquent_year)
    {
        $this->container['delinquent_year'] = $delinquent_year;

        return $this;
    }

    /**
     * Gets area_code
     *
     * @return string
     */
    public function getAreaCode()
    {
        return $this->container['area_code'];
    }

    /**
     * Sets area_code
     *
     * @param string $area_code CoreLogic standardized code that identifies the tax area associated with the parcel.
     *
     * @return $this
     */
    public function setAreaCode($area_code)
    {
        $this->container['area_code'] = $area_code;

        return $this;
    }

    /**
     * Gets area_code_description
     *
     * @return string
     */
    public function getAreaCodeDescription()
    {
        return $this->container['area_code_description'];
    }

    /**
     * Sets area_code_description
     *
     * @param string $area_code_description The corresponding description for the CoreLogic standardized code that identifies the tax area associated with the parcel.
     *
     * @return $this
     */
    public function setAreaCodeDescription($area_code_description)
    {
        $this->container['area_code_description'] = $area_code_description;

        return $this;
    }

    /**
     * Gets property_tax_rate
     *
     * @return float
     */
    public function getPropertyTaxRate()
    {
        return $this->container['property_tax_rate'];
    }

    /**
     * Sets property_tax_rate
     *
     * @param float $property_tax_rate County provided tax rate for the property based on Property Taxes billed through the county..
     *
     * @return $this
     */
    public function setPropertyTaxRate($property_tax_rate)
    {
        $this->container['property_tax_rate'] = $property_tax_rate;

        return $this;
    }

    /**
     * Gets calculated_total_exemption_amount
     *
     * @return float
     */
    public function getCalculatedTotalExemptionAmount()
    {
        return $this->container['calculated_total_exemption_amount'];
    }

    /**
     * Sets calculated_total_exemption_amount
     *
     * @param float $calculated_total_exemption_amount calculated Total Exemption Amount
     *
     * @return $this
     */
    public function setCalculatedTotalExemptionAmount($calculated_total_exemption_amount)
    {
        $this->container['calculated_total_exemption_amount'] = $calculated_total_exemption_amount;

        return $this;
    }

    /**
     * Gets total_tax_exemption_amount
     *
     * @return float
     */
    public function getTotalTaxExemptionAmount()
    {
        return $this->container['total_tax_exemption_amount'];
    }

    /**
     * Sets total_tax_exemption_amount
     *
     * @param float $total_tax_exemption_amount County provided value of buildings and land that are exempt from taxes on the parcel.
     *
     * @return $this
     */
    public function setTotalTaxExemptionAmount($total_tax_exemption_amount)
    {
        $this->container['total_tax_exemption_amount'] = $total_tax_exemption_amount;

        return $this;
    }

    /**
     * Gets total_tax_amount
     *
     * @return float
     */
    public function getTotalTaxAmount()
    {
        return $this->container['total_tax_amount'];
    }

    /**
     * Sets total_tax_amount
     *
     * @param float $total_tax_amount Total billed property tax amount for the current tax year.
     *
     * @return $this
     */
    public function setTotalTaxAmount($total_tax_amount)
    {
        $this->container['total_tax_amount'] = $total_tax_amount;

        return $this;
    }

    /**
     * Gets county_tax_amount
     *
     * @return float
     */
    public function getCountyTaxAmount()
    {
        return $this->container['county_tax_amount'];
    }

    /**
     * Sets county_tax_amount
     *
     * @param float $county_tax_amount Property tax levied by an individual county. Used in counties with multiple taxing jurisdictions reporting separately. (Ex: a parcel may be subject to a County Tax, City Tax, and School District Tax)
     *
     * @return $this
     */
    public function setCountyTaxAmount($county_tax_amount)
    {
        $this->container['county_tax_amount'] = $county_tax_amount;

        return $this;
    }

    /**
     * Gets school_tax_amount
     *
     * @return float
     */
    public function getSchoolTaxAmount()
    {
        return $this->container['school_tax_amount'];
    }

    /**
     * Sets school_tax_amount
     *
     * @param float $school_tax_amount Property tax levied by a school district. Used in counties with multiple taxing jurisdictions reporting separately.
     *
     * @return $this
     */
    public function setSchoolTaxAmount($school_tax_amount)
    {
        $this->container['school_tax_amount'] = $school_tax_amount;

        return $this;
    }

    /**
     * Gets town_tax_amount
     *
     * @return float
     */
    public function getTownTaxAmount()
    {
        return $this->container['town_tax_amount'];
    }

    /**
     * Sets town_tax_amount
     *
     * @param float $town_tax_amount Town Tax Amount
     *
     * @return $this
     */
    public function setTownTaxAmount($town_tax_amount)
    {
        $this->container['town_tax_amount'] = $town_tax_amount;

        return $this;
    }

    /**
     * Gets village_tax_amount
     *
     * @return float
     */
    public function getVillageTaxAmount()
    {
        return $this->container['village_tax_amount'];
    }

    /**
     * Sets village_tax_amount
     *
     * @param float $village_tax_amount Property tax levied by a village. (Village is an administrative division within a town or township.)
     *
     * @return $this
     */
    public function setVillageTaxAmount($village_tax_amount)
    {
        $this->container['village_tax_amount'] = $village_tax_amount;

        return $this;
    }

    /**
     * Gets net_tax_amount
     *
     * @return float
     */
    public function getNetTaxAmount()
    {
        return $this->container['net_tax_amount'];
    }

    /**
     * Sets net_tax_amount
     *
     * @param float $net_tax_amount Property tax amount less exemptions and/or credits.
     *
     * @return $this
     */
    public function setNetTaxAmount($net_tax_amount)
    {
        $this->container['net_tax_amount'] = $net_tax_amount;

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
