<?php
/**
 * MortgageDetail
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
 * MortgageDetail Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MortgageDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MortgageDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'mortgage_transaction_id_detail' => '\Swagger\Client\Model\MortgageTransactionIdDetail',
        'mortgage_transaction_detail' => '\Swagger\Client\Model\MortgageTransactionDetail',
        'mortgage_transaction_indicator_detail' => '\Swagger\Client\Model\MortgageTransactionIndicatorDetail',
        'mortgage_rider_detail' => '\Swagger\Client\Model\MortgageRiderDetail',
        'borrower_detail' => '\Swagger\Client\Model\BorrowerDetail',
        'principal_detail' => '\Swagger\Client\Model\PrincipalDetail',
        'lender_detail' => '\Swagger\Client\Model\LenderDetail',
        'mortgage_title_detail' => '\Swagger\Client\Model\MortgageTitleDetail',
        'nmls_detail' => '\Swagger\Client\Model\NMLSDetail',
        'mortgage_arm_detail' => '\Swagger\Client\Model\MortgageArmDetail',
        'subject_transaction_detail' => '\Swagger\Client\Model\SubjectTransactionDetail'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'mortgage_transaction_id_detail' => null,
        'mortgage_transaction_detail' => null,
        'mortgage_transaction_indicator_detail' => null,
        'mortgage_rider_detail' => null,
        'borrower_detail' => null,
        'principal_detail' => null,
        'lender_detail' => null,
        'mortgage_title_detail' => null,
        'nmls_detail' => null,
        'mortgage_arm_detail' => null,
        'subject_transaction_detail' => null
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
        'mortgage_transaction_id_detail' => 'mortgageTransactionIdDetail',
        'mortgage_transaction_detail' => 'mortgageTransactionDetail',
        'mortgage_transaction_indicator_detail' => 'mortgageTransactionIndicatorDetail',
        'mortgage_rider_detail' => 'mortgageRiderDetail',
        'borrower_detail' => 'borrowerDetail',
        'principal_detail' => 'principalDetail',
        'lender_detail' => 'lenderDetail',
        'mortgage_title_detail' => 'mortgageTitleDetail',
        'nmls_detail' => 'nmlsDetail',
        'mortgage_arm_detail' => 'mortgageArmDetail',
        'subject_transaction_detail' => 'subjectTransactionDetail'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mortgage_transaction_id_detail' => 'setMortgageTransactionIdDetail',
        'mortgage_transaction_detail' => 'setMortgageTransactionDetail',
        'mortgage_transaction_indicator_detail' => 'setMortgageTransactionIndicatorDetail',
        'mortgage_rider_detail' => 'setMortgageRiderDetail',
        'borrower_detail' => 'setBorrowerDetail',
        'principal_detail' => 'setPrincipalDetail',
        'lender_detail' => 'setLenderDetail',
        'mortgage_title_detail' => 'setMortgageTitleDetail',
        'nmls_detail' => 'setNmlsDetail',
        'mortgage_arm_detail' => 'setMortgageArmDetail',
        'subject_transaction_detail' => 'setSubjectTransactionDetail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mortgage_transaction_id_detail' => 'getMortgageTransactionIdDetail',
        'mortgage_transaction_detail' => 'getMortgageTransactionDetail',
        'mortgage_transaction_indicator_detail' => 'getMortgageTransactionIndicatorDetail',
        'mortgage_rider_detail' => 'getMortgageRiderDetail',
        'borrower_detail' => 'getBorrowerDetail',
        'principal_detail' => 'getPrincipalDetail',
        'lender_detail' => 'getLenderDetail',
        'mortgage_title_detail' => 'getMortgageTitleDetail',
        'nmls_detail' => 'getNmlsDetail',
        'mortgage_arm_detail' => 'getMortgageArmDetail',
        'subject_transaction_detail' => 'getSubjectTransactionDetail'
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
        $this->container['mortgage_transaction_id_detail'] = isset($data['mortgage_transaction_id_detail']) ? $data['mortgage_transaction_id_detail'] : null;
        $this->container['mortgage_transaction_detail'] = isset($data['mortgage_transaction_detail']) ? $data['mortgage_transaction_detail'] : null;
        $this->container['mortgage_transaction_indicator_detail'] = isset($data['mortgage_transaction_indicator_detail']) ? $data['mortgage_transaction_indicator_detail'] : null;
        $this->container['mortgage_rider_detail'] = isset($data['mortgage_rider_detail']) ? $data['mortgage_rider_detail'] : null;
        $this->container['borrower_detail'] = isset($data['borrower_detail']) ? $data['borrower_detail'] : null;
        $this->container['principal_detail'] = isset($data['principal_detail']) ? $data['principal_detail'] : null;
        $this->container['lender_detail'] = isset($data['lender_detail']) ? $data['lender_detail'] : null;
        $this->container['mortgage_title_detail'] = isset($data['mortgage_title_detail']) ? $data['mortgage_title_detail'] : null;
        $this->container['nmls_detail'] = isset($data['nmls_detail']) ? $data['nmls_detail'] : null;
        $this->container['mortgage_arm_detail'] = isset($data['mortgage_arm_detail']) ? $data['mortgage_arm_detail'] : null;
        $this->container['subject_transaction_detail'] = isset($data['subject_transaction_detail']) ? $data['subject_transaction_detail'] : null;
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
     * Gets mortgage_transaction_id_detail
     *
     * @return \Swagger\Client\Model\MortgageTransactionIdDetail
     */
    public function getMortgageTransactionIdDetail()
    {
        return $this->container['mortgage_transaction_id_detail'];
    }

    /**
     * Sets mortgage_transaction_id_detail
     *
     * @param \Swagger\Client\Model\MortgageTransactionIdDetail $mortgage_transaction_id_detail mortgage_transaction_id_detail
     *
     * @return $this
     */
    public function setMortgageTransactionIdDetail($mortgage_transaction_id_detail)
    {
        $this->container['mortgage_transaction_id_detail'] = $mortgage_transaction_id_detail;

        return $this;
    }

    /**
     * Gets mortgage_transaction_detail
     *
     * @return \Swagger\Client\Model\MortgageTransactionDetail
     */
    public function getMortgageTransactionDetail()
    {
        return $this->container['mortgage_transaction_detail'];
    }

    /**
     * Sets mortgage_transaction_detail
     *
     * @param \Swagger\Client\Model\MortgageTransactionDetail $mortgage_transaction_detail mortgage_transaction_detail
     *
     * @return $this
     */
    public function setMortgageTransactionDetail($mortgage_transaction_detail)
    {
        $this->container['mortgage_transaction_detail'] = $mortgage_transaction_detail;

        return $this;
    }

    /**
     * Gets mortgage_transaction_indicator_detail
     *
     * @return \Swagger\Client\Model\MortgageTransactionIndicatorDetail
     */
    public function getMortgageTransactionIndicatorDetail()
    {
        return $this->container['mortgage_transaction_indicator_detail'];
    }

    /**
     * Sets mortgage_transaction_indicator_detail
     *
     * @param \Swagger\Client\Model\MortgageTransactionIndicatorDetail $mortgage_transaction_indicator_detail mortgage_transaction_indicator_detail
     *
     * @return $this
     */
    public function setMortgageTransactionIndicatorDetail($mortgage_transaction_indicator_detail)
    {
        $this->container['mortgage_transaction_indicator_detail'] = $mortgage_transaction_indicator_detail;

        return $this;
    }

    /**
     * Gets mortgage_rider_detail
     *
     * @return \Swagger\Client\Model\MortgageRiderDetail
     */
    public function getMortgageRiderDetail()
    {
        return $this->container['mortgage_rider_detail'];
    }

    /**
     * Sets mortgage_rider_detail
     *
     * @param \Swagger\Client\Model\MortgageRiderDetail $mortgage_rider_detail mortgage_rider_detail
     *
     * @return $this
     */
    public function setMortgageRiderDetail($mortgage_rider_detail)
    {
        $this->container['mortgage_rider_detail'] = $mortgage_rider_detail;

        return $this;
    }

    /**
     * Gets borrower_detail
     *
     * @return \Swagger\Client\Model\BorrowerDetail
     */
    public function getBorrowerDetail()
    {
        return $this->container['borrower_detail'];
    }

    /**
     * Sets borrower_detail
     *
     * @param \Swagger\Client\Model\BorrowerDetail $borrower_detail borrower_detail
     *
     * @return $this
     */
    public function setBorrowerDetail($borrower_detail)
    {
        $this->container['borrower_detail'] = $borrower_detail;

        return $this;
    }

    /**
     * Gets principal_detail
     *
     * @return \Swagger\Client\Model\PrincipalDetail
     */
    public function getPrincipalDetail()
    {
        return $this->container['principal_detail'];
    }

    /**
     * Sets principal_detail
     *
     * @param \Swagger\Client\Model\PrincipalDetail $principal_detail principal_detail
     *
     * @return $this
     */
    public function setPrincipalDetail($principal_detail)
    {
        $this->container['principal_detail'] = $principal_detail;

        return $this;
    }

    /**
     * Gets lender_detail
     *
     * @return \Swagger\Client\Model\LenderDetail
     */
    public function getLenderDetail()
    {
        return $this->container['lender_detail'];
    }

    /**
     * Sets lender_detail
     *
     * @param \Swagger\Client\Model\LenderDetail $lender_detail lender_detail
     *
     * @return $this
     */
    public function setLenderDetail($lender_detail)
    {
        $this->container['lender_detail'] = $lender_detail;

        return $this;
    }

    /**
     * Gets mortgage_title_detail
     *
     * @return \Swagger\Client\Model\MortgageTitleDetail
     */
    public function getMortgageTitleDetail()
    {
        return $this->container['mortgage_title_detail'];
    }

    /**
     * Sets mortgage_title_detail
     *
     * @param \Swagger\Client\Model\MortgageTitleDetail $mortgage_title_detail mortgage_title_detail
     *
     * @return $this
     */
    public function setMortgageTitleDetail($mortgage_title_detail)
    {
        $this->container['mortgage_title_detail'] = $mortgage_title_detail;

        return $this;
    }

    /**
     * Gets nmls_detail
     *
     * @return \Swagger\Client\Model\NMLSDetail
     */
    public function getNmlsDetail()
    {
        return $this->container['nmls_detail'];
    }

    /**
     * Sets nmls_detail
     *
     * @param \Swagger\Client\Model\NMLSDetail $nmls_detail nmls_detail
     *
     * @return $this
     */
    public function setNmlsDetail($nmls_detail)
    {
        $this->container['nmls_detail'] = $nmls_detail;

        return $this;
    }

    /**
     * Gets mortgage_arm_detail
     *
     * @return \Swagger\Client\Model\MortgageArmDetail
     */
    public function getMortgageArmDetail()
    {
        return $this->container['mortgage_arm_detail'];
    }

    /**
     * Sets mortgage_arm_detail
     *
     * @param \Swagger\Client\Model\MortgageArmDetail $mortgage_arm_detail mortgage_arm_detail
     *
     * @return $this
     */
    public function setMortgageArmDetail($mortgage_arm_detail)
    {
        $this->container['mortgage_arm_detail'] = $mortgage_arm_detail;

        return $this;
    }

    /**
     * Gets subject_transaction_detail
     *
     * @return \Swagger\Client\Model\SubjectTransactionDetail
     */
    public function getSubjectTransactionDetail()
    {
        return $this->container['subject_transaction_detail'];
    }

    /**
     * Sets subject_transaction_detail
     *
     * @param \Swagger\Client\Model\SubjectTransactionDetail $subject_transaction_detail subject_transaction_detail
     *
     * @return $this
     */
    public function setSubjectTransactionDetail($subject_transaction_detail)
    {
        $this->container['subject_transaction_detail'] = $subject_transaction_detail;

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
