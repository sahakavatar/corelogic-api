<?php
/**
 * TaxLienDetails
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
 * TaxLienDetails Class Doc Comment
 *
 * @category Class
 * @description taxLienDetails
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaxLienDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TaxLienDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'tax_lien_alias_type_code' => 'string',
        'tax_lien_alias_type_code_description' => 'string',
        'taxpayer_id_number' => 'string',
        'tax_lien_number' => 'string',
        'tax_lien_date' => 'string',
        'tax_lien_period_begin_minimum_date' => 'string',
        'tax_lien_period_end_maximum_date' => 'string',
        'tax_lien_last_refiling_or_lien_extension_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'tax_lien_alias_type_code' => null,
        'tax_lien_alias_type_code_description' => null,
        'taxpayer_id_number' => null,
        'tax_lien_number' => null,
        'tax_lien_date' => null,
        'tax_lien_period_begin_minimum_date' => null,
        'tax_lien_period_end_maximum_date' => null,
        'tax_lien_last_refiling_or_lien_extension_date' => null
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
        'tax_lien_alias_type_code' => 'taxLienAliasTypeCode',
        'tax_lien_alias_type_code_description' => 'taxLienAliasTypeCodeDescription',
        'taxpayer_id_number' => 'taxpayerIdNumber',
        'tax_lien_number' => 'taxLienNumber',
        'tax_lien_date' => 'taxLienDate',
        'tax_lien_period_begin_minimum_date' => 'taxLienPeriodBeginMinimumDate',
        'tax_lien_period_end_maximum_date' => 'taxLienPeriodEndMaximumDate',
        'tax_lien_last_refiling_or_lien_extension_date' => 'taxLienLastRefilingOrLienExtensionDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tax_lien_alias_type_code' => 'setTaxLienAliasTypeCode',
        'tax_lien_alias_type_code_description' => 'setTaxLienAliasTypeCodeDescription',
        'taxpayer_id_number' => 'setTaxpayerIdNumber',
        'tax_lien_number' => 'setTaxLienNumber',
        'tax_lien_date' => 'setTaxLienDate',
        'tax_lien_period_begin_minimum_date' => 'setTaxLienPeriodBeginMinimumDate',
        'tax_lien_period_end_maximum_date' => 'setTaxLienPeriodEndMaximumDate',
        'tax_lien_last_refiling_or_lien_extension_date' => 'setTaxLienLastRefilingOrLienExtensionDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tax_lien_alias_type_code' => 'getTaxLienAliasTypeCode',
        'tax_lien_alias_type_code_description' => 'getTaxLienAliasTypeCodeDescription',
        'taxpayer_id_number' => 'getTaxpayerIdNumber',
        'tax_lien_number' => 'getTaxLienNumber',
        'tax_lien_date' => 'getTaxLienDate',
        'tax_lien_period_begin_minimum_date' => 'getTaxLienPeriodBeginMinimumDate',
        'tax_lien_period_end_maximum_date' => 'getTaxLienPeriodEndMaximumDate',
        'tax_lien_last_refiling_or_lien_extension_date' => 'getTaxLienLastRefilingOrLienExtensionDate'
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
        $this->container['tax_lien_alias_type_code'] = isset($data['tax_lien_alias_type_code']) ? $data['tax_lien_alias_type_code'] : null;
        $this->container['tax_lien_alias_type_code_description'] = isset($data['tax_lien_alias_type_code_description']) ? $data['tax_lien_alias_type_code_description'] : null;
        $this->container['taxpayer_id_number'] = isset($data['taxpayer_id_number']) ? $data['taxpayer_id_number'] : null;
        $this->container['tax_lien_number'] = isset($data['tax_lien_number']) ? $data['tax_lien_number'] : null;
        $this->container['tax_lien_date'] = isset($data['tax_lien_date']) ? $data['tax_lien_date'] : null;
        $this->container['tax_lien_period_begin_minimum_date'] = isset($data['tax_lien_period_begin_minimum_date']) ? $data['tax_lien_period_begin_minimum_date'] : null;
        $this->container['tax_lien_period_end_maximum_date'] = isset($data['tax_lien_period_end_maximum_date']) ? $data['tax_lien_period_end_maximum_date'] : null;
        $this->container['tax_lien_last_refiling_or_lien_extension_date'] = isset($data['tax_lien_last_refiling_or_lien_extension_date']) ? $data['tax_lien_last_refiling_or_lien_extension_date'] : null;
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
     * Gets tax_lien_alias_type_code
     *
     * @return string
     */
    public function getTaxLienAliasTypeCode()
    {
        return $this->container['tax_lien_alias_type_code'];
    }

    /**
     * Sets tax_lien_alias_type_code
     *
     * @param string $tax_lien_alias_type_code Identifies the reason for the alias name as in Doing Business As (DBA).   <br>Values: AAR = Also Appear on Record, ABN = Also Business Name, ADO = A Division Of, AKA = Also Known As, ASO = A Subrogee Of, ATF = As Trustee For, CKA = Commonly Known As, DBA = Doing Business As, FBO = For Benefit Of, FDBA = Formerly Doing Business As, FKA = Formerly Known As, FNO = Full Name Of, HTTA = Has Taken Title As, KA = Known As, KBM = Known Beyond Marriage, KNA = Known Now As, NBM = Name Beyond Marriage, NKA = Now Known As, PDBA = Previously Doing Business As, PKA = Previously Known As, QI = Qualified Intermediary, SBM = Successor By Merger/To, SKA = Sometime Known As/Same Known As, TA = Titled As, UTA = Under Trust Agreement Of, WATA = Who Acquired Titled As.
     *
     * @return $this
     */
    public function setTaxLienAliasTypeCode($tax_lien_alias_type_code)
    {
        $this->container['tax_lien_alias_type_code'] = $tax_lien_alias_type_code;

        return $this;
    }

    /**
     * Gets tax_lien_alias_type_code_description
     *
     * @return string
     */
    public function getTaxLienAliasTypeCodeDescription()
    {
        return $this->container['tax_lien_alias_type_code_description'];
    }

    /**
     * Sets tax_lien_alias_type_code_description
     *
     * @param string $tax_lien_alias_type_code_description Alias name reason type description.
     *
     * @return $this
     */
    public function setTaxLienAliasTypeCodeDescription($tax_lien_alias_type_code_description)
    {
        $this->container['tax_lien_alias_type_code_description'] = $tax_lien_alias_type_code_description;

        return $this;
    }

    /**
     * Gets taxpayer_id_number
     *
     * @return string
     */
    public function getTaxpayerIdNumber()
    {
        return $this->container['taxpayer_id_number'];
    }

    /**
     * Sets taxpayer_id_number
     *
     * @param string $taxpayer_id_number Taxpayer ID number that identifies the taxpayer (not a social security number) on federal, state, city and county tax liens and can include special characters, such as hyphens. Note: Multiple ID number records are created when multiple taxpayers or defendants are listed on a tax lien document.
     *
     * @return $this
     */
    public function setTaxpayerIdNumber($taxpayer_id_number)
    {
        $this->container['taxpayer_id_number'] = $taxpayer_id_number;

        return $this;
    }

    /**
     * Gets tax_lien_number
     *
     * @return string
     */
    public function getTaxLienNumber()
    {
        return $this->container['tax_lien_number'];
    }

    /**
     * Sets tax_lien_number
     *
     * @param string $tax_lien_number Tax lien, serial or certificate number.
     *
     * @return $this
     */
    public function setTaxLienNumber($tax_lien_number)
    {
        $this->container['tax_lien_number'] = $tax_lien_number;

        return $this;
    }

    /**
     * Gets tax_lien_date
     *
     * @return string
     */
    public function getTaxLienDate()
    {
        return $this->container['tax_lien_date'];
    }

    /**
     * Sets tax_lien_date
     *
     * @param string $tax_lien_date If the document is a tax lien release, this date is the tax lien release date. Otherwise, this date is the tax lien date, which is the date the document was executed at its source - county, city, federal or state.  Format: YYYYMMDD
     *
     * @return $this
     */
    public function setTaxLienDate($tax_lien_date)
    {
        $this->container['tax_lien_date'] = $tax_lien_date;

        return $this;
    }

    /**
     * Gets tax_lien_period_begin_minimum_date
     *
     * @return string
     */
    public function getTaxLienPeriodBeginMinimumDate()
    {
        return $this->container['tax_lien_period_begin_minimum_date'];
    }

    /**
     * Sets tax_lien_period_begin_minimum_date
     *
     * @param string $tax_lien_period_begin_minimum_date Beginning date of the tax lien period.  Format: YYYYMMDD
     *
     * @return $this
     */
    public function setTaxLienPeriodBeginMinimumDate($tax_lien_period_begin_minimum_date)
    {
        $this->container['tax_lien_period_begin_minimum_date'] = $tax_lien_period_begin_minimum_date;

        return $this;
    }

    /**
     * Gets tax_lien_period_end_maximum_date
     *
     * @return string
     */
    public function getTaxLienPeriodEndMaximumDate()
    {
        return $this->container['tax_lien_period_end_maximum_date'];
    }

    /**
     * Sets tax_lien_period_end_maximum_date
     *
     * @param string $tax_lien_period_end_maximum_date End date of the tax lien period Format: YYYYMMDD
     *
     * @return $this
     */
    public function setTaxLienPeriodEndMaximumDate($tax_lien_period_end_maximum_date)
    {
        $this->container['tax_lien_period_end_maximum_date'] = $tax_lien_period_end_maximum_date;

        return $this;
    }

    /**
     * Gets tax_lien_last_refiling_or_lien_extension_date
     *
     * @return string
     */
    public function getTaxLienLastRefilingOrLienExtensionDate()
    {
        return $this->container['tax_lien_last_refiling_or_lien_extension_date'];
    }

    /**
     * Sets tax_lien_last_refiling_or_lien_extension_date
     *
     * @param string $tax_lien_last_refiling_or_lien_extension_date Last date to refile or extend a tax lien, as noted on the tax lien document.  Format: YYYYMMDD
     *
     * @return $this
     */
    public function setTaxLienLastRefilingOrLienExtensionDate($tax_lien_last_refiling_or_lien_extension_date)
    {
        $this->container['tax_lien_last_refiling_or_lien_extension_date'] = $tax_lien_last_refiling_or_lien_extension_date;

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
