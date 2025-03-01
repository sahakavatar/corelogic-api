<?php
/**
 * EnrichedLiensRiskData
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
 * EnrichedLiensRiskData Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EnrichedLiensRiskData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EnrichedLiensRiskData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'clip' => 'string',
        'county_mortgage_coverage_summary' => '\Swagger\Client\Model\EnrichedLiensCountyMortgageCoverageSummary',
        'open_lien_equity_and_ltv' => '\Swagger\Client\Model\EnrichedLienRiskEquity',
        'enriched' => '\Swagger\Client\Model\EnrichedLienEstimatedPIQ',
        'open_liens' => '\Swagger\Client\Model\EnrichedLienRiskTransaction[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'clip' => null,
        'county_mortgage_coverage_summary' => null,
        'open_lien_equity_and_ltv' => null,
        'enriched' => null,
        'open_liens' => null
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
        'clip' => 'clip',
        'county_mortgage_coverage_summary' => 'countyMortgageCoverageSummary',
        'open_lien_equity_and_ltv' => 'openLienEquityAndLTV',
        'enriched' => 'enriched',
        'open_liens' => 'openLiens'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'clip' => 'setClip',
        'county_mortgage_coverage_summary' => 'setCountyMortgageCoverageSummary',
        'open_lien_equity_and_ltv' => 'setOpenLienEquityAndLtv',
        'enriched' => 'setEnriched',
        'open_liens' => 'setOpenLiens'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'clip' => 'getClip',
        'county_mortgage_coverage_summary' => 'getCountyMortgageCoverageSummary',
        'open_lien_equity_and_ltv' => 'getOpenLienEquityAndLtv',
        'enriched' => 'getEnriched',
        'open_liens' => 'getOpenLiens'
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
        $this->container['clip'] = isset($data['clip']) ? $data['clip'] : null;
        $this->container['county_mortgage_coverage_summary'] = isset($data['county_mortgage_coverage_summary']) ? $data['county_mortgage_coverage_summary'] : null;
        $this->container['open_lien_equity_and_ltv'] = isset($data['open_lien_equity_and_ltv']) ? $data['open_lien_equity_and_ltv'] : null;
        $this->container['enriched'] = isset($data['enriched']) ? $data['enriched'] : null;
        $this->container['open_liens'] = isset($data['open_liens']) ? $data['open_liens'] : null;
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
     * Gets clip
     *
     * @return string
     */
    public function getClip()
    {
        return $this->container['clip'];
    }

    /**
     * Sets clip
     *
     * @param string $clip Unique identification number assigned to each property.
     *
     * @return $this
     */
    public function setClip($clip)
    {
        $this->container['clip'] = $clip;

        return $this;
    }

    /**
     * Gets county_mortgage_coverage_summary
     *
     * @return \Swagger\Client\Model\EnrichedLiensCountyMortgageCoverageSummary
     */
    public function getCountyMortgageCoverageSummary()
    {
        return $this->container['county_mortgage_coverage_summary'];
    }

    /**
     * Sets county_mortgage_coverage_summary
     *
     * @param \Swagger\Client\Model\EnrichedLiensCountyMortgageCoverageSummary $county_mortgage_coverage_summary county_mortgage_coverage_summary
     *
     * @return $this
     */
    public function setCountyMortgageCoverageSummary($county_mortgage_coverage_summary)
    {
        $this->container['county_mortgage_coverage_summary'] = $county_mortgage_coverage_summary;

        return $this;
    }

    /**
     * Gets open_lien_equity_and_ltv
     *
     * @return \Swagger\Client\Model\EnrichedLienRiskEquity
     */
    public function getOpenLienEquityAndLtv()
    {
        return $this->container['open_lien_equity_and_ltv'];
    }

    /**
     * Sets open_lien_equity_and_ltv
     *
     * @param \Swagger\Client\Model\EnrichedLienRiskEquity $open_lien_equity_and_ltv open_lien_equity_and_ltv
     *
     * @return $this
     */
    public function setOpenLienEquityAndLtv($open_lien_equity_and_ltv)
    {
        $this->container['open_lien_equity_and_ltv'] = $open_lien_equity_and_ltv;

        return $this;
    }

    /**
     * Gets enriched
     *
     * @return \Swagger\Client\Model\EnrichedLienEstimatedPIQ
     */
    public function getEnriched()
    {
        return $this->container['enriched'];
    }

    /**
     * Sets enriched
     *
     * @param \Swagger\Client\Model\EnrichedLienEstimatedPIQ $enriched enriched
     *
     * @return $this
     */
    public function setEnriched($enriched)
    {
        $this->container['enriched'] = $enriched;

        return $this;
    }

    /**
     * Gets open_liens
     *
     * @return \Swagger\Client\Model\EnrichedLienRiskTransaction[]
     */
    public function getOpenLiens()
    {
        return $this->container['open_liens'];
    }

    /**
     * Sets open_liens
     *
     * @param \Swagger\Client\Model\EnrichedLienRiskTransaction[] $open_liens List of Enriched Liens.
     *
     * @return $this
     */
    public function setOpenLiens($open_liens)
    {
        $this->container['open_liens'] = $open_liens;

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
