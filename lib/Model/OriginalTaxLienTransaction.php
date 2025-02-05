<?php
/**
 * OriginalTaxLienTransaction
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
 * OriginalTaxLienTransaction Class Doc Comment
 *
 * @category Class
 * @description originalTaxLienTransaction
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OriginalTaxLienTransaction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OriginalTaxLienTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'original_lien_recording_date' => 'string',
        'original_lien_document_number' => 'string',
        'original_lien_document_book_number' => 'string',
        'original_lien_document_page_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'original_lien_recording_date' => null,
        'original_lien_document_number' => null,
        'original_lien_document_book_number' => null,
        'original_lien_document_page_number' => null
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
        'original_lien_recording_date' => 'originalLienRecordingDate',
        'original_lien_document_number' => 'originalLienDocumentNumber',
        'original_lien_document_book_number' => 'originalLienDocumentBookNumber',
        'original_lien_document_page_number' => 'originalLienDocumentPageNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'original_lien_recording_date' => 'setOriginalLienRecordingDate',
        'original_lien_document_number' => 'setOriginalLienDocumentNumber',
        'original_lien_document_book_number' => 'setOriginalLienDocumentBookNumber',
        'original_lien_document_page_number' => 'setOriginalLienDocumentPageNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'original_lien_recording_date' => 'getOriginalLienRecordingDate',
        'original_lien_document_number' => 'getOriginalLienDocumentNumber',
        'original_lien_document_book_number' => 'getOriginalLienDocumentBookNumber',
        'original_lien_document_page_number' => 'getOriginalLienDocumentPageNumber'
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
        $this->container['original_lien_recording_date'] = isset($data['original_lien_recording_date']) ? $data['original_lien_recording_date'] : null;
        $this->container['original_lien_document_number'] = isset($data['original_lien_document_number']) ? $data['original_lien_document_number'] : null;
        $this->container['original_lien_document_book_number'] = isset($data['original_lien_document_book_number']) ? $data['original_lien_document_book_number'] : null;
        $this->container['original_lien_document_page_number'] = isset($data['original_lien_document_page_number']) ? $data['original_lien_document_page_number'] : null;
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
     * Gets original_lien_recording_date
     *
     * @return string
     */
    public function getOriginalLienRecordingDate()
    {
        return $this->container['original_lien_recording_date'];
    }

    /**
     * Sets original_lien_recording_date
     *
     * @param string $original_lien_recording_date Recording Date of the original lien transaction associated with this record and refers to prior associated transaction. Format = YYYYMMDD. Typically refers back to the Recording Date of the Lien. To link to the prior transaction, use FIPS + Original Transaction Recording Date + Original Transaction Document Number (or use FIPS + Original Transaction Recording Date + Original Transaction Document Book Number + Original Transaction Document Page Number if Book/Page is the documenter numbering method used by the county).
     *
     * @return $this
     */
    public function setOriginalLienRecordingDate($original_lien_recording_date)
    {
        $this->container['original_lien_recording_date'] = $original_lien_recording_date;

        return $this;
    }

    /**
     * Gets original_lien_document_number
     *
     * @return string
     */
    public function getOriginalLienDocumentNumber()
    {
        return $this->container['original_lien_document_number'];
    }

    /**
     * Sets original_lien_document_number
     *
     * @param string $original_lien_document_number Document Number of the original lien transaction associated with this record and refers to prior associated transaction. Typically refers back to the Document Number of the Lien. To link to the prior transaction, use FIPS + Original Transaction Recording Date + Original Transaction Document Number (or use FIPS + Original Transaction Recording Date + Original Transaction Document Book Number + Original Transaction Document Page Number if Book/Page is the documenter numbering method used by the county).
     *
     * @return $this
     */
    public function setOriginalLienDocumentNumber($original_lien_document_number)
    {
        $this->container['original_lien_document_number'] = $original_lien_document_number;

        return $this;
    }

    /**
     * Gets original_lien_document_book_number
     *
     * @return string
     */
    public function getOriginalLienDocumentBookNumber()
    {
        return $this->container['original_lien_document_book_number'];
    }

    /**
     * Sets original_lien_document_book_number
     *
     * @param string $original_lien_document_book_number Document Book Number of the original lien transaction associated with this record and refers to prior associated transaction. Typically refers back to the Document Book Number of the Lien. To link to the prior transaction, use FIPS + Original Transaction Recording Date + Original Transaction Document Number (or use FIPS + Original Transaction Recording Date + Original Transaction Document Book Number + Original Transaction Document Page Number if Book/Page is the documenter numbering method used by the county).
     *
     * @return $this
     */
    public function setOriginalLienDocumentBookNumber($original_lien_document_book_number)
    {
        $this->container['original_lien_document_book_number'] = $original_lien_document_book_number;

        return $this;
    }

    /**
     * Gets original_lien_document_page_number
     *
     * @return string
     */
    public function getOriginalLienDocumentPageNumber()
    {
        return $this->container['original_lien_document_page_number'];
    }

    /**
     * Sets original_lien_document_page_number
     *
     * @param string $original_lien_document_page_number Document Page Number of the original lien transaction associated with this record and refers to prior associated transaction. Typically refers back to the Document Page Number of the Lien. To link to the prior transaction, use FIPS + Original Transaction Recording Date + Original Transaction Document Number (or use FIPS + Original Transaction Recording Date + Original Transaction Document Book Number + Original Transaction Document Page Number if Book/Page is the documenter numbering method used by the county).
     *
     * @return $this
     */
    public function setOriginalLienDocumentPageNumber($original_lien_document_page_number)
    {
        $this->container['original_lien_document_page_number'] = $original_lien_document_page_number;

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
