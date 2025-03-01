<?php
/**
 * PaceLienTransaction
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
 * PaceLienTransaction Class Doc Comment
 *
 * @category Class
 * @description Pace Lien Transaction
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaceLienTransaction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaceLienTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pace_lien_recording_date' => 'string',
        'pace_lien_deed_category_type_code' => 'string',
        'pace_lien_document_type_code' => 'string',
        'pace_lien_recorded_document_number' => 'string',
        'pace_lien_recorded_document_book_number' => 'string',
        'pace_lien_recorded_document_page_number' => 'string',
        'pace_lien_total_assessment_amount' => 'float',
        'pace_lien_assessment_date' => 'string',
        'pace_lien_due_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'pace_lien_recording_date' => null,
        'pace_lien_deed_category_type_code' => null,
        'pace_lien_document_type_code' => null,
        'pace_lien_recorded_document_number' => null,
        'pace_lien_recorded_document_book_number' => null,
        'pace_lien_recorded_document_page_number' => null,
        'pace_lien_total_assessment_amount' => null,
        'pace_lien_assessment_date' => null,
        'pace_lien_due_date' => null
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
        'pace_lien_recording_date' => 'paceLienRecordingDate',
        'pace_lien_deed_category_type_code' => 'paceLienDeedCategoryTypeCode',
        'pace_lien_document_type_code' => 'paceLienDocumentTypeCode',
        'pace_lien_recorded_document_number' => 'paceLienRecordedDocumentNumber',
        'pace_lien_recorded_document_book_number' => 'paceLienRecordedDocumentBookNumber',
        'pace_lien_recorded_document_page_number' => 'paceLienRecordedDocumentPageNumber',
        'pace_lien_total_assessment_amount' => 'paceLienTotalAssessmentAmount',
        'pace_lien_assessment_date' => 'paceLienAssessmentDate',
        'pace_lien_due_date' => 'paceLienDueDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pace_lien_recording_date' => 'setPaceLienRecordingDate',
        'pace_lien_deed_category_type_code' => 'setPaceLienDeedCategoryTypeCode',
        'pace_lien_document_type_code' => 'setPaceLienDocumentTypeCode',
        'pace_lien_recorded_document_number' => 'setPaceLienRecordedDocumentNumber',
        'pace_lien_recorded_document_book_number' => 'setPaceLienRecordedDocumentBookNumber',
        'pace_lien_recorded_document_page_number' => 'setPaceLienRecordedDocumentPageNumber',
        'pace_lien_total_assessment_amount' => 'setPaceLienTotalAssessmentAmount',
        'pace_lien_assessment_date' => 'setPaceLienAssessmentDate',
        'pace_lien_due_date' => 'setPaceLienDueDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pace_lien_recording_date' => 'getPaceLienRecordingDate',
        'pace_lien_deed_category_type_code' => 'getPaceLienDeedCategoryTypeCode',
        'pace_lien_document_type_code' => 'getPaceLienDocumentTypeCode',
        'pace_lien_recorded_document_number' => 'getPaceLienRecordedDocumentNumber',
        'pace_lien_recorded_document_book_number' => 'getPaceLienRecordedDocumentBookNumber',
        'pace_lien_recorded_document_page_number' => 'getPaceLienRecordedDocumentPageNumber',
        'pace_lien_total_assessment_amount' => 'getPaceLienTotalAssessmentAmount',
        'pace_lien_assessment_date' => 'getPaceLienAssessmentDate',
        'pace_lien_due_date' => 'getPaceLienDueDate'
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
        $this->container['pace_lien_recording_date'] = isset($data['pace_lien_recording_date']) ? $data['pace_lien_recording_date'] : null;
        $this->container['pace_lien_deed_category_type_code'] = isset($data['pace_lien_deed_category_type_code']) ? $data['pace_lien_deed_category_type_code'] : null;
        $this->container['pace_lien_document_type_code'] = isset($data['pace_lien_document_type_code']) ? $data['pace_lien_document_type_code'] : null;
        $this->container['pace_lien_recorded_document_number'] = isset($data['pace_lien_recorded_document_number']) ? $data['pace_lien_recorded_document_number'] : null;
        $this->container['pace_lien_recorded_document_book_number'] = isset($data['pace_lien_recorded_document_book_number']) ? $data['pace_lien_recorded_document_book_number'] : null;
        $this->container['pace_lien_recorded_document_page_number'] = isset($data['pace_lien_recorded_document_page_number']) ? $data['pace_lien_recorded_document_page_number'] : null;
        $this->container['pace_lien_total_assessment_amount'] = isset($data['pace_lien_total_assessment_amount']) ? $data['pace_lien_total_assessment_amount'] : null;
        $this->container['pace_lien_assessment_date'] = isset($data['pace_lien_assessment_date']) ? $data['pace_lien_assessment_date'] : null;
        $this->container['pace_lien_due_date'] = isset($data['pace_lien_due_date']) ? $data['pace_lien_due_date'] : null;
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
     * Gets pace_lien_recording_date
     *
     * @return string
     */
    public function getPaceLienRecordingDate()
    {
        return $this->container['pace_lien_recording_date'];
    }

    /**
     * Sets pace_lien_recording_date
     *
     * @param string $pace_lien_recording_date The date the PACE transaction was recorded at the county.  Format: YYYYMMDD
     *
     * @return $this
     */
    public function setPaceLienRecordingDate($pace_lien_recording_date)
    {
        $this->container['pace_lien_recording_date'] = $pace_lien_recording_date;

        return $this;
    }

    /**
     * Gets pace_lien_deed_category_type_code
     *
     * @return string
     */
    public function getPaceLienDeedCategoryTypeCode()
    {
        return $this->container['pace_lien_deed_category_type_code'];
    }

    /**
     * Sets pace_lien_deed_category_type_code
     *
     * @param string $pace_lien_deed_category_type_code CoreLogic proprietary deed category type code that identifies the class of recorded legal document. \"J\" for Pace Liens and Modifications and \"R\" for Releases.
     *
     * @return $this
     */
    public function setPaceLienDeedCategoryTypeCode($pace_lien_deed_category_type_code)
    {
        $this->container['pace_lien_deed_category_type_code'] = $pace_lien_deed_category_type_code;

        return $this;
    }

    /**
     * Gets pace_lien_document_type_code
     *
     * @return string
     */
    public function getPaceLienDocumentTypeCode()
    {
        return $this->container['pace_lien_document_type_code'];
    }

    /**
     * Sets pace_lien_document_type_code
     *
     * @param string $pace_lien_document_type_code The type of PACE Document. Options are: PX = PACE Lien; PM = PACE Modification; PZ = PACE Release.
     *
     * @return $this
     */
    public function setPaceLienDocumentTypeCode($pace_lien_document_type_code)
    {
        $this->container['pace_lien_document_type_code'] = $pace_lien_document_type_code;

        return $this;
    }

    /**
     * Gets pace_lien_recorded_document_number
     *
     * @return string
     */
    public function getPaceLienRecordedDocumentNumber()
    {
        return $this->container['pace_lien_recorded_document_number'];
    }

    /**
     * Sets pace_lien_recorded_document_number
     *
     * @param string $pace_lien_recorded_document_number The Document Number of PACE Document used by some counties to catalog their recordings.
     *
     * @return $this
     */
    public function setPaceLienRecordedDocumentNumber($pace_lien_recorded_document_number)
    {
        $this->container['pace_lien_recorded_document_number'] = $pace_lien_recorded_document_number;

        return $this;
    }

    /**
     * Gets pace_lien_recorded_document_book_number
     *
     * @return string
     */
    public function getPaceLienRecordedDocumentBookNumber()
    {
        return $this->container['pace_lien_recorded_document_book_number'];
    }

    /**
     * Sets pace_lien_recorded_document_book_number
     *
     * @param string $pace_lien_recorded_document_book_number The Book Number of PACE Document used by some counties to catalog their recordings.
     *
     * @return $this
     */
    public function setPaceLienRecordedDocumentBookNumber($pace_lien_recorded_document_book_number)
    {
        $this->container['pace_lien_recorded_document_book_number'] = $pace_lien_recorded_document_book_number;

        return $this;
    }

    /**
     * Gets pace_lien_recorded_document_page_number
     *
     * @return string
     */
    public function getPaceLienRecordedDocumentPageNumber()
    {
        return $this->container['pace_lien_recorded_document_page_number'];
    }

    /**
     * Sets pace_lien_recorded_document_page_number
     *
     * @param string $pace_lien_recorded_document_page_number The Page Number of PACE Document used by some counties to catalog their recordings.
     *
     * @return $this
     */
    public function setPaceLienRecordedDocumentPageNumber($pace_lien_recorded_document_page_number)
    {
        $this->container['pace_lien_recorded_document_page_number'] = $pace_lien_recorded_document_page_number;

        return $this;
    }

    /**
     * Gets pace_lien_total_assessment_amount
     *
     * @return float
     */
    public function getPaceLienTotalAssessmentAmount()
    {
        return $this->container['pace_lien_total_assessment_amount'];
    }

    /**
     * Sets pace_lien_total_assessment_amount
     *
     * @param float $pace_lien_total_assessment_amount Total Contractual Assessment amount (cost + fees) which is found in the body of NOA (Notice of Assessment) of PACE Document.
     *
     * @return $this
     */
    public function setPaceLienTotalAssessmentAmount($pace_lien_total_assessment_amount)
    {
        $this->container['pace_lien_total_assessment_amount'] = $pace_lien_total_assessment_amount;

        return $this;
    }

    /**
     * Gets pace_lien_assessment_date
     *
     * @return string
     */
    public function getPaceLienAssessmentDate()
    {
        return $this->container['pace_lien_assessment_date'];
    }

    /**
     * Sets pace_lien_assessment_date
     *
     * @param string $pace_lien_assessment_date Date of PACE Assessment, if indicated on the document. If not indicated, the signature date will be used. Format: YYYYMMDD
     *
     * @return $this
     */
    public function setPaceLienAssessmentDate($pace_lien_assessment_date)
    {
        $this->container['pace_lien_assessment_date'] = $pace_lien_assessment_date;

        return $this;
    }

    /**
     * Gets pace_lien_due_date
     *
     * @return string
     */
    public function getPaceLienDueDate()
    {
        return $this->container['pace_lien_due_date'];
    }

    /**
     * Sets pace_lien_due_date
     *
     * @param string $pace_lien_due_date Contractual Assessment Expiration Date of PACE Document. Format: YYYYMMDD
     *
     * @return $this
     */
    public function setPaceLienDueDate($pace_lien_due_date)
    {
        $this->container['pace_lien_due_date'] = $pace_lien_due_date;

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
