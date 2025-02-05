<?php
/**
 * Lot
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
 * Lot Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Lot implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Lot';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'area_acres' => 'float',
        'area_square_feet' => 'float',
        'area_square_feet_usable' => 'float',
        'depth_feet' => 'float',
        'front_feet' => 'float',
        'shape_code' => 'string',
        'topography_type' => 'string',
        'easement_type_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'area_acres' => null,
        'area_square_feet' => null,
        'area_square_feet_usable' => null,
        'depth_feet' => null,
        'front_feet' => null,
        'shape_code' => null,
        'topography_type' => null,
        'easement_type_code' => null
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
        'area_acres' => 'areaAcres',
        'area_square_feet' => 'areaSquareFeet',
        'area_square_feet_usable' => 'areaSquareFeetUsable',
        'depth_feet' => 'depthFeet',
        'front_feet' => 'frontFeet',
        'shape_code' => 'shapeCode',
        'topography_type' => 'topographyType',
        'easement_type_code' => 'easementTypeCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'area_acres' => 'setAreaAcres',
        'area_square_feet' => 'setAreaSquareFeet',
        'area_square_feet_usable' => 'setAreaSquareFeetUsable',
        'depth_feet' => 'setDepthFeet',
        'front_feet' => 'setFrontFeet',
        'shape_code' => 'setShapeCode',
        'topography_type' => 'setTopographyType',
        'easement_type_code' => 'setEasementTypeCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'area_acres' => 'getAreaAcres',
        'area_square_feet' => 'getAreaSquareFeet',
        'area_square_feet_usable' => 'getAreaSquareFeetUsable',
        'depth_feet' => 'getDepthFeet',
        'front_feet' => 'getFrontFeet',
        'shape_code' => 'getShapeCode',
        'topography_type' => 'getTopographyType',
        'easement_type_code' => 'getEasementTypeCode'
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
        $this->container['area_acres'] = isset($data['area_acres']) ? $data['area_acres'] : null;
        $this->container['area_square_feet'] = isset($data['area_square_feet']) ? $data['area_square_feet'] : null;
        $this->container['area_square_feet_usable'] = isset($data['area_square_feet_usable']) ? $data['area_square_feet_usable'] : null;
        $this->container['depth_feet'] = isset($data['depth_feet']) ? $data['depth_feet'] : null;
        $this->container['front_feet'] = isset($data['front_feet']) ? $data['front_feet'] : null;
        $this->container['shape_code'] = isset($data['shape_code']) ? $data['shape_code'] : null;
        $this->container['topography_type'] = isset($data['topography_type']) ? $data['topography_type'] : null;
        $this->container['easement_type_code'] = isset($data['easement_type_code']) ? $data['easement_type_code'] : null;
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
     * Gets area_acres
     *
     * @return float
     */
    public function getAreaAcres()
    {
        return $this->container['area_acres'];
    }

    /**
     * Sets area_acres
     *
     * @param float $area_acres CoreLogic derived or county provided value that indicates the total acreage of the parcel.
     *
     * @return $this
     */
    public function setAreaAcres($area_acres)
    {
        $this->container['area_acres'] = $area_acres;

        return $this;
    }

    /**
     * Gets area_square_feet
     *
     * @return float
     */
    public function getAreaSquareFeet()
    {
        return $this->container['area_square_feet'];
    }

    /**
     * Sets area_square_feet
     *
     * @param float $area_square_feet Total land mass in square feet.
     *
     * @return $this
     */
    public function setAreaSquareFeet($area_square_feet)
    {
        $this->container['area_square_feet'] = $area_square_feet;

        return $this;
    }

    /**
     * Gets area_square_feet_usable
     *
     * @return float
     */
    public function getAreaSquareFeetUsable()
    {
        return $this->container['area_square_feet_usable'];
    }

    /**
     * Sets area_square_feet_usable
     *
     * @param float $area_square_feet_usable Area of lot in square feet suitable for building construction.
     *
     * @return $this
     */
    public function setAreaSquareFeetUsable($area_square_feet_usable)
    {
        $this->container['area_square_feet_usable'] = $area_square_feet_usable;

        return $this;
    }

    /**
     * Gets depth_feet
     *
     * @return float
     */
    public function getDepthFeet()
    {
        return $this->container['depth_feet'];
    }

    /**
     * Sets depth_feet
     *
     * @param float $depth_feet The linear feet between the front and back of the lot.
     *
     * @return $this
     */
    public function setDepthFeet($depth_feet)
    {
        $this->container['depth_feet'] = $depth_feet;

        return $this;
    }

    /**
     * Gets front_feet
     *
     * @return float
     */
    public function getFrontFeet()
    {
        return $this->container['front_feet'];
    }

    /**
     * Sets front_feet
     *
     * @param float $front_feet The linear feet across the front of the lot - facing the street.
     *
     * @return $this
     */
    public function setFrontFeet($front_feet)
    {
        $this->container['front_feet'] = $front_feet;

        return $this;
    }

    /**
     * Gets shape_code
     *
     * @return string
     */
    public function getShapeCode()
    {
        return $this->container['shape_code'];
    }

    /**
     * Sets shape_code
     *
     * @param string $shape_code County provided code or text describing the shape of a lot. Example: IRR = Irregular
     *
     * @return $this
     */
    public function setShapeCode($shape_code)
    {
        $this->container['shape_code'] = $shape_code;

        return $this;
    }

    /**
     * Gets topography_type
     *
     * @return string
     */
    public function getTopographyType()
    {
        return $this->container['topography_type'];
    }

    /**
     * Sets topography_type
     *
     * @param string $topography_type CoreLogic standardized code that identifies the topography of the property.
     *
     * @return $this
     */
    public function setTopographyType($topography_type)
    {
        $this->container['topography_type'] = $topography_type;

        return $this;
    }

    /**
     * Gets easement_type_code
     *
     * @return string
     */
    public function getEasementTypeCode()
    {
        return $this->container['easement_type_code'];
    }

    /**
     * Sets easement_type_code
     *
     * @param string $easement_type_code County provided code describing easement(s) that may exist on the property. Note: An easement is a right granted to one party with regard to the land of another party. Most easements provide for access across one property to another. This can also be a green space or waterways between two properties or county or city property such as city gas lines running across a property. Example: 2 = Flood Control Easement. Easement value is delivered if available, otherwise easement code is delivered.
     *
     * @return $this
     */
    public function setEasementTypeCode($easement_type_code)
    {
        $this->container['easement_type_code'] = $easement_type_code;

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
