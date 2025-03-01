<?php
/**
 * StructureClassification
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
 * StructureClassification Class Doc Comment
 *
 * @category Class
 * @description Structure Classification.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StructureClassification implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'StructureClassification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'building_type_code' => 'string',
        'building_class_code' => 'string',
        'grade_type_code' => 'string',
        'fire_sprinkler_type_code' => 'string',
        'fire_insurance_type_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'building_type_code' => null,
        'building_class_code' => null,
        'grade_type_code' => null,
        'fire_sprinkler_type_code' => null,
        'fire_insurance_type_code' => null
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
        'building_type_code' => 'buildingTypeCode',
        'building_class_code' => 'buildingClassCode',
        'grade_type_code' => 'gradeTypeCode',
        'fire_sprinkler_type_code' => 'fireSprinklerTypeCode',
        'fire_insurance_type_code' => 'fireInsuranceTypeCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'building_type_code' => 'setBuildingTypeCode',
        'building_class_code' => 'setBuildingClassCode',
        'grade_type_code' => 'setGradeTypeCode',
        'fire_sprinkler_type_code' => 'setFireSprinklerTypeCode',
        'fire_insurance_type_code' => 'setFireInsuranceTypeCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'building_type_code' => 'getBuildingTypeCode',
        'building_class_code' => 'getBuildingClassCode',
        'grade_type_code' => 'getGradeTypeCode',
        'fire_sprinkler_type_code' => 'getFireSprinklerTypeCode',
        'fire_insurance_type_code' => 'getFireInsuranceTypeCode'
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
        $this->container['building_type_code'] = isset($data['building_type_code']) ? $data['building_type_code'] : null;
        $this->container['building_class_code'] = isset($data['building_class_code']) ? $data['building_class_code'] : null;
        $this->container['grade_type_code'] = isset($data['grade_type_code']) ? $data['grade_type_code'] : null;
        $this->container['fire_sprinkler_type_code'] = isset($data['fire_sprinkler_type_code']) ? $data['fire_sprinkler_type_code'] : null;
        $this->container['fire_insurance_type_code'] = isset($data['fire_insurance_type_code']) ? $data['fire_insurance_type_code'] : null;
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
     * Gets building_type_code
     *
     * @return string
     */
    public function getBuildingTypeCode()
    {
        return $this->container['building_type_code'];
    }

    /**
     * Sets building_type_code
     *
     * @param string $building_type_code The primary building type (e.g., Bowling Alley, Supermarket).
     *
     * @return $this
     */
    public function setBuildingTypeCode($building_type_code)
    {
        $this->container['building_type_code'] = $building_type_code;

        return $this;
    }

    /**
     * Gets building_class_code
     *
     * @return string
     */
    public function getBuildingClassCode()
    {
        return $this->container['building_class_code'];
    }

    /**
     * Sets building_class_code
     *
     * @param string $building_class_code Standard Fire Insurance Building Classification codes: (A - Fireproof Steel, B - Reinforced Concrete, C- Concrete, D- Wood or Steel Frame, S - Incombustible). These are specific codes that we directly capture and are not derived from other data.
     *
     * @return $this
     */
    public function setBuildingClassCode($building_class_code)
    {
        $this->container['building_class_code'] = $building_class_code;

        return $this;
    }

    /**
     * Gets grade_type_code
     *
     * @return string
     */
    public function getGradeTypeCode()
    {
        return $this->container['grade_type_code'];
    }

    /**
     * Sets grade_type_code
     *
     * @param string $grade_type_code County provided code for the grading of the property. Generally the grade description is an overall category of quality and the broad classification used is fair, average or very good.
     *
     * @return $this
     */
    public function setGradeTypeCode($grade_type_code)
    {
        $this->container['grade_type_code'] = $grade_type_code;

        return $this;
    }

    /**
     * Gets fire_sprinkler_type_code
     *
     * @return string
     */
    public function getFireSprinklerTypeCode()
    {
        return $this->container['fire_sprinkler_type_code'];
    }

    /**
     * Sets fire_sprinkler_type_code
     *
     * @param string $fire_sprinkler_type_code CoreLogic standardized code that identifies the type of sprinkler system associated with the building. This is most commonly used in commercial buildings.
     *
     * @return $this
     */
    public function setFireSprinklerTypeCode($fire_sprinkler_type_code)
    {
        $this->container['fire_sprinkler_type_code'] = $fire_sprinkler_type_code;

        return $this;
    }

    /**
     * Gets fire_insurance_type_code
     *
     * @return string
     */
    public function getFireInsuranceTypeCode()
    {
        return $this->container['fire_insurance_type_code'];
    }

    /**
     * Sets fire_insurance_type_code
     *
     * @param string $fire_insurance_type_code County provided code that identifies the type of building classification for fire insurance purposes. Mostly used for commercial or multi-family buildings. Values: A = Fireproof Steel; B = Reinforced Concrete; C = Concrete; D = Wood or Steel Frame; S = Incombustible
     *
     * @return $this
     */
    public function setFireInsuranceTypeCode($fire_insurance_type_code)
    {
        $this->container['fire_insurance_type_code'] = $fire_insurance_type_code;

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
