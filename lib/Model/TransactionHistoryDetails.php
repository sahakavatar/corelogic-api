<?php
/**
 * TransactionHistoryDetails
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
 * TransactionHistoryDetails Class Doc Comment
 *
 * @category Class
 * @description Transaction Details
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransactionHistoryDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TransactionHistoryDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'primary_category_code' => 'string',
        'primary_category_code_description' => 'string',
        'deed_category_code' => 'string',
        'deed_category_code_description' => 'string',
        'sale_date_derived' => 'string',
        'sale_recording_date_derived' => 'string',
        'sale_amount' => 'float',
        'sale_type_code' => 'string',
        'sale_type_code_description' => 'string',
        'sale_document_type_code' => 'string',
        'sale_document_type_code_description' => 'string',
        'sale_document_number' => 'string',
        'sale_book_number' => 'string',
        'sale_page_number' => 'string',
        'ownership_transfer_percent' => 'int',
        'multi_or_split_parcel_code' => 'string',
        'is_cash_purchase' => 'int',
        'is_mortgage_purchase' => 'int',
        'is_interfamily_related' => 'int',
        'is_investor_purchase' => 'int',
        'is_resale' => 'int',
        'is_short_sale' => 'int',
        'is_foreclosure_reo' => 'int',
        'is_foreclosure_reo_sale' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'primary_category_code' => null,
        'primary_category_code_description' => null,
        'deed_category_code' => null,
        'deed_category_code_description' => null,
        'sale_date_derived' => null,
        'sale_recording_date_derived' => null,
        'sale_amount' => null,
        'sale_type_code' => null,
        'sale_type_code_description' => null,
        'sale_document_type_code' => null,
        'sale_document_type_code_description' => null,
        'sale_document_number' => null,
        'sale_book_number' => null,
        'sale_page_number' => null,
        'ownership_transfer_percent' => 'int32',
        'multi_or_split_parcel_code' => null,
        'is_cash_purchase' => 'int32',
        'is_mortgage_purchase' => 'int32',
        'is_interfamily_related' => 'int32',
        'is_investor_purchase' => 'int32',
        'is_resale' => 'int32',
        'is_short_sale' => 'int32',
        'is_foreclosure_reo' => 'int32',
        'is_foreclosure_reo_sale' => 'int32'
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
        'primary_category_code' => 'primaryCategoryCode',
        'primary_category_code_description' => 'primaryCategoryCodeDescription',
        'deed_category_code' => 'deedCategoryCode',
        'deed_category_code_description' => 'deedCategoryCodeDescription',
        'sale_date_derived' => 'saleDateDerived',
        'sale_recording_date_derived' => 'saleRecordingDateDerived',
        'sale_amount' => 'saleAmount',
        'sale_type_code' => 'saleTypeCode',
        'sale_type_code_description' => 'saleTypeCodeDescription',
        'sale_document_type_code' => 'saleDocumentTypeCode',
        'sale_document_type_code_description' => 'saleDocumentTypeCodeDescription',
        'sale_document_number' => 'saleDocumentNumber',
        'sale_book_number' => 'saleBookNumber',
        'sale_page_number' => 'salePageNumber',
        'ownership_transfer_percent' => 'ownershipTransferPercent',
        'multi_or_split_parcel_code' => 'multiOrSplitParcelCode',
        'is_cash_purchase' => 'isCashPurchase',
        'is_mortgage_purchase' => 'isMortgagePurchase',
        'is_interfamily_related' => 'isInterfamilyRelated',
        'is_investor_purchase' => 'isInvestorPurchase',
        'is_resale' => 'isResale',
        'is_short_sale' => 'isShortSale',
        'is_foreclosure_reo' => 'isForeclosureReo',
        'is_foreclosure_reo_sale' => 'isForeclosureReoSale'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'primary_category_code' => 'setPrimaryCategoryCode',
        'primary_category_code_description' => 'setPrimaryCategoryCodeDescription',
        'deed_category_code' => 'setDeedCategoryCode',
        'deed_category_code_description' => 'setDeedCategoryCodeDescription',
        'sale_date_derived' => 'setSaleDateDerived',
        'sale_recording_date_derived' => 'setSaleRecordingDateDerived',
        'sale_amount' => 'setSaleAmount',
        'sale_type_code' => 'setSaleTypeCode',
        'sale_type_code_description' => 'setSaleTypeCodeDescription',
        'sale_document_type_code' => 'setSaleDocumentTypeCode',
        'sale_document_type_code_description' => 'setSaleDocumentTypeCodeDescription',
        'sale_document_number' => 'setSaleDocumentNumber',
        'sale_book_number' => 'setSaleBookNumber',
        'sale_page_number' => 'setSalePageNumber',
        'ownership_transfer_percent' => 'setOwnershipTransferPercent',
        'multi_or_split_parcel_code' => 'setMultiOrSplitParcelCode',
        'is_cash_purchase' => 'setIsCashPurchase',
        'is_mortgage_purchase' => 'setIsMortgagePurchase',
        'is_interfamily_related' => 'setIsInterfamilyRelated',
        'is_investor_purchase' => 'setIsInvestorPurchase',
        'is_resale' => 'setIsResale',
        'is_short_sale' => 'setIsShortSale',
        'is_foreclosure_reo' => 'setIsForeclosureReo',
        'is_foreclosure_reo_sale' => 'setIsForeclosureReoSale'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'primary_category_code' => 'getPrimaryCategoryCode',
        'primary_category_code_description' => 'getPrimaryCategoryCodeDescription',
        'deed_category_code' => 'getDeedCategoryCode',
        'deed_category_code_description' => 'getDeedCategoryCodeDescription',
        'sale_date_derived' => 'getSaleDateDerived',
        'sale_recording_date_derived' => 'getSaleRecordingDateDerived',
        'sale_amount' => 'getSaleAmount',
        'sale_type_code' => 'getSaleTypeCode',
        'sale_type_code_description' => 'getSaleTypeCodeDescription',
        'sale_document_type_code' => 'getSaleDocumentTypeCode',
        'sale_document_type_code_description' => 'getSaleDocumentTypeCodeDescription',
        'sale_document_number' => 'getSaleDocumentNumber',
        'sale_book_number' => 'getSaleBookNumber',
        'sale_page_number' => 'getSalePageNumber',
        'ownership_transfer_percent' => 'getOwnershipTransferPercent',
        'multi_or_split_parcel_code' => 'getMultiOrSplitParcelCode',
        'is_cash_purchase' => 'getIsCashPurchase',
        'is_mortgage_purchase' => 'getIsMortgagePurchase',
        'is_interfamily_related' => 'getIsInterfamilyRelated',
        'is_investor_purchase' => 'getIsInvestorPurchase',
        'is_resale' => 'getIsResale',
        'is_short_sale' => 'getIsShortSale',
        'is_foreclosure_reo' => 'getIsForeclosureReo',
        'is_foreclosure_reo_sale' => 'getIsForeclosureReoSale'
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
        $this->container['primary_category_code'] = isset($data['primary_category_code']) ? $data['primary_category_code'] : null;
        $this->container['primary_category_code_description'] = isset($data['primary_category_code_description']) ? $data['primary_category_code_description'] : null;
        $this->container['deed_category_code'] = isset($data['deed_category_code']) ? $data['deed_category_code'] : null;
        $this->container['deed_category_code_description'] = isset($data['deed_category_code_description']) ? $data['deed_category_code_description'] : null;
        $this->container['sale_date_derived'] = isset($data['sale_date_derived']) ? $data['sale_date_derived'] : null;
        $this->container['sale_recording_date_derived'] = isset($data['sale_recording_date_derived']) ? $data['sale_recording_date_derived'] : null;
        $this->container['sale_amount'] = isset($data['sale_amount']) ? $data['sale_amount'] : null;
        $this->container['sale_type_code'] = isset($data['sale_type_code']) ? $data['sale_type_code'] : null;
        $this->container['sale_type_code_description'] = isset($data['sale_type_code_description']) ? $data['sale_type_code_description'] : null;
        $this->container['sale_document_type_code'] = isset($data['sale_document_type_code']) ? $data['sale_document_type_code'] : null;
        $this->container['sale_document_type_code_description'] = isset($data['sale_document_type_code_description']) ? $data['sale_document_type_code_description'] : null;
        $this->container['sale_document_number'] = isset($data['sale_document_number']) ? $data['sale_document_number'] : null;
        $this->container['sale_book_number'] = isset($data['sale_book_number']) ? $data['sale_book_number'] : null;
        $this->container['sale_page_number'] = isset($data['sale_page_number']) ? $data['sale_page_number'] : null;
        $this->container['ownership_transfer_percent'] = isset($data['ownership_transfer_percent']) ? $data['ownership_transfer_percent'] : null;
        $this->container['multi_or_split_parcel_code'] = isset($data['multi_or_split_parcel_code']) ? $data['multi_or_split_parcel_code'] : null;
        $this->container['is_cash_purchase'] = isset($data['is_cash_purchase']) ? $data['is_cash_purchase'] : null;
        $this->container['is_mortgage_purchase'] = isset($data['is_mortgage_purchase']) ? $data['is_mortgage_purchase'] : null;
        $this->container['is_interfamily_related'] = isset($data['is_interfamily_related']) ? $data['is_interfamily_related'] : null;
        $this->container['is_investor_purchase'] = isset($data['is_investor_purchase']) ? $data['is_investor_purchase'] : null;
        $this->container['is_resale'] = isset($data['is_resale']) ? $data['is_resale'] : null;
        $this->container['is_short_sale'] = isset($data['is_short_sale']) ? $data['is_short_sale'] : null;
        $this->container['is_foreclosure_reo'] = isset($data['is_foreclosure_reo']) ? $data['is_foreclosure_reo'] : null;
        $this->container['is_foreclosure_reo_sale'] = isset($data['is_foreclosure_reo_sale']) ? $data['is_foreclosure_reo_sale'] : null;
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
     * Gets primary_category_code
     *
     * @return string
     */
    public function getPrimaryCategoryCode()
    {
        return $this->container['primary_category_code'];
    }

    /**
     * Sets primary_category_code
     *
     * @param string $primary_category_code CoreLogic proprietary transaction classification code that identifies the type of transaction.
     *
     * @return $this
     */
    public function setPrimaryCategoryCode($primary_category_code)
    {
        $this->container['primary_category_code'] = $primary_category_code;

        return $this;
    }

    /**
     * Gets primary_category_code_description
     *
     * @return string
     */
    public function getPrimaryCategoryCodeDescription()
    {
        return $this->container['primary_category_code_description'];
    }

    /**
     * Sets primary_category_code_description
     *
     * @param string $primary_category_code_description Described value of the primaryCategoryCode.
     *
     * @return $this
     */
    public function setPrimaryCategoryCodeDescription($primary_category_code_description)
    {
        $this->container['primary_category_code_description'] = $primary_category_code_description;

        return $this;
    }

    /**
     * Gets deed_category_code
     *
     * @return string
     */
    public function getDeedCategoryCode()
    {
        return $this->container['deed_category_code'];
    }

    /**
     * Sets deed_category_code
     *
     * @param string $deed_category_code CoreLogic proprietary deed category type code that identifies the class of recorded legal document.
     *
     * @return $this
     */
    public function setDeedCategoryCode($deed_category_code)
    {
        $this->container['deed_category_code'] = $deed_category_code;

        return $this;
    }

    /**
     * Gets deed_category_code_description
     *
     * @return string
     */
    public function getDeedCategoryCodeDescription()
    {
        return $this->container['deed_category_code_description'];
    }

    /**
     * Sets deed_category_code_description
     *
     * @param string $deed_category_code_description Described value of the deedCategoryCode.
     *
     * @return $this
     */
    public function setDeedCategoryCodeDescription($deed_category_code_description)
    {
        $this->container['deed_category_code_description'] = $deed_category_code_description;

        return $this;
    }

    /**
     * Gets sale_date_derived
     *
     * @return string
     */
    public function getSaleDateDerived()
    {
        return $this->container['sale_date_derived'];
    }

    /**
     * Sets sale_date_derived
     *
     * @param string $sale_date_derived CoreLogic proprietary sale date derived from the original public record filing, representing the date that the Deed was prepared in advance of being notarized and prior to being recorded. Format: YYYYMMDD.
     *
     * @return $this
     */
    public function setSaleDateDerived($sale_date_derived)
    {
        $this->container['sale_date_derived'] = $sale_date_derived;

        return $this;
    }

    /**
     * Gets sale_recording_date_derived
     *
     * @return string
     */
    public function getSaleRecordingDateDerived()
    {
        return $this->container['sale_recording_date_derived'];
    }

    /**
     * Sets sale_recording_date_derived
     *
     * @param string $sale_recording_date_derived CoreLogic proprietary sale recording date derived from the original public record filing, representing the date the sales transaction was recorded at the county. This date is generally considered the transfer of ownership date. Format: YYYYMMDD.
     *
     * @return $this
     */
    public function setSaleRecordingDateDerived($sale_recording_date_derived)
    {
        $this->container['sale_recording_date_derived'] = $sale_recording_date_derived;

        return $this;
    }

    /**
     * Gets sale_amount
     *
     * @return float
     */
    public function getSaleAmount()
    {
        return $this->container['sale_amount'];
    }

    /**
     * Sets sale_amount
     *
     * @param float $sale_amount Dollar amount of the most recent sale of the property.
     *
     * @return $this
     */
    public function setSaleAmount($sale_amount)
    {
        $this->container['sale_amount'] = $sale_amount;

        return $this;
    }

    /**
     * Gets sale_type_code
     *
     * @return string
     */
    public function getSaleTypeCode()
    {
        return $this->container['sale_type_code'];
    }

    /**
     * Sets sale_type_code
     *
     * @param string $sale_type_code This field indicates what the financial consideration is - if a Deed record represents a change of ownership (Sale).
     *
     * @return $this
     */
    public function setSaleTypeCode($sale_type_code)
    {
        $this->container['sale_type_code'] = $sale_type_code;

        return $this;
    }

    /**
     * Gets sale_type_code_description
     *
     * @return string
     */
    public function getSaleTypeCodeDescription()
    {
        return $this->container['sale_type_code_description'];
    }

    /**
     * Sets sale_type_code_description
     *
     * @param string $sale_type_code_description Described value of the saleTypeCode.
     *
     * @return $this
     */
    public function setSaleTypeCodeDescription($sale_type_code_description)
    {
        $this->container['sale_type_code_description'] = $sale_type_code_description;

        return $this;
    }

    /**
     * Gets sale_document_type_code
     *
     * @return string
     */
    public function getSaleDocumentTypeCode()
    {
        return $this->container['sale_document_type_code'];
    }

    /**
     * Sets sale_document_type_code
     *
     * @param string $sale_document_type_code The type of deed used to record the sales transaction (e.g., Grant, Quit, Foreclosure).
     *
     * @return $this
     */
    public function setSaleDocumentTypeCode($sale_document_type_code)
    {
        $this->container['sale_document_type_code'] = $sale_document_type_code;

        return $this;
    }

    /**
     * Gets sale_document_type_code_description
     *
     * @return string
     */
    public function getSaleDocumentTypeCodeDescription()
    {
        return $this->container['sale_document_type_code_description'];
    }

    /**
     * Sets sale_document_type_code_description
     *
     * @param string $sale_document_type_code_description Described value of the saleDocumentTypeCode.
     *
     * @return $this
     */
    public function setSaleDocumentTypeCodeDescription($sale_document_type_code_description)
    {
        $this->container['sale_document_type_code_description'] = $sale_document_type_code_description;

        return $this;
    }

    /**
     * Gets sale_document_number
     *
     * @return string
     */
    public function getSaleDocumentNumber()
    {
        return $this->container['sale_document_number'];
    }

    /**
     * Sets sale_document_number
     *
     * @param string $sale_document_number The document number used by some counties to record sales transactions - typically a Grant or Warranty Deed.
     *
     * @return $this
     */
    public function setSaleDocumentNumber($sale_document_number)
    {
        $this->container['sale_document_number'] = $sale_document_number;

        return $this;
    }

    /**
     * Gets sale_book_number
     *
     * @return string
     */
    public function getSaleBookNumber()
    {
        return $this->container['sale_book_number'];
    }

    /**
     * Sets sale_book_number
     *
     * @param string $sale_book_number The Book number used by some counties to catalog their sales recordings.
     *
     * @return $this
     */
    public function setSaleBookNumber($sale_book_number)
    {
        $this->container['sale_book_number'] = $sale_book_number;

        return $this;
    }

    /**
     * Gets sale_page_number
     *
     * @return string
     */
    public function getSalePageNumber()
    {
        return $this->container['sale_page_number'];
    }

    /**
     * Sets sale_page_number
     *
     * @param string $sale_page_number The Page number used by some counties to catalog their sales recordings.
     *
     * @return $this
     */
    public function setSalePageNumber($sale_page_number)
    {
        $this->container['sale_page_number'] = $sale_page_number;

        return $this;
    }

    /**
     * Gets ownership_transfer_percent
     *
     * @return int
     */
    public function getOwnershipTransferPercent()
    {
        return $this->container['ownership_transfer_percent'];
    }

    /**
     * Sets ownership_transfer_percent
     *
     * @param int $ownership_transfer_percent A percentile showing the percentage of ownership transferred.
     *
     * @return $this
     */
    public function setOwnershipTransferPercent($ownership_transfer_percent)
    {
        $this->container['ownership_transfer_percent'] = $ownership_transfer_percent;

        return $this;
    }

    /**
     * Gets multi_or_split_parcel_code
     *
     * @return string
     */
    public function getMultiOrSplitParcelCode()
    {
        return $this->container['multi_or_split_parcel_code'];
    }

    /**
     * Sets multi_or_split_parcel_code
     *
     * @param string $multi_or_split_parcel_code CoreLogic standardized code that identifies which parcel is being referenced in a multiple or split parcel sale. Values: EMPTY/NULL = Not applicable, M = First parcel of a multiple parcel transaction, D = Subsequent parcel of a multiple parcel transaction, S = Single parcel transaction where parcel is annotated as a portion of or with other property, Z = Multiple parcel transaction where parcel is annotated as a portion of or with other property.
     *
     * @return $this
     */
    public function setMultiOrSplitParcelCode($multi_or_split_parcel_code)
    {
        $this->container['multi_or_split_parcel_code'] = $multi_or_split_parcel_code;

        return $this;
    }

    /**
     * Gets is_cash_purchase
     *
     * @return int
     */
    public function getIsCashPurchase()
    {
        return $this->container['is_cash_purchase'];
    }

    /**
     * Sets is_cash_purchase
     *
     * @param int $is_cash_purchase CoreLogic proprietary value that identifies if the property was a cash-based arms-length transaction. 0 = not applicable, 1= applicable.
     *
     * @return $this
     */
    public function setIsCashPurchase($is_cash_purchase)
    {
        $this->container['is_cash_purchase'] = $is_cash_purchase;

        return $this;
    }

    /**
     * Gets is_mortgage_purchase
     *
     * @return int
     */
    public function getIsMortgagePurchase()
    {
        return $this->container['is_mortgage_purchase'];
    }

    /**
     * Sets is_mortgage_purchase
     *
     * @param int $is_mortgage_purchase CoreLogic proprietary value that identifies if the property has a mortgage.0 = not applicable, 1= applicable.
     *
     * @return $this
     */
    public function setIsMortgagePurchase($is_mortgage_purchase)
    {
        $this->container['is_mortgage_purchase'] = $is_mortgage_purchase;

        return $this;
    }

    /**
     * Gets is_interfamily_related
     *
     * @return int
     */
    public function getIsInterfamilyRelated()
    {
        return $this->container['is_interfamily_related'];
    }

    /**
     * Sets is_interfamily_related
     *
     * @param int $is_interfamily_related CoreLogic proprietary value that indicates if a potential relationship between the seller and the buyer of the property exists. This could be interfamily, intercompany, or trust transfer (non-arms length transaction).0 = not applicable, 1= applicable.
     *
     * @return $this
     */
    public function setIsInterfamilyRelated($is_interfamily_related)
    {
        $this->container['is_interfamily_related'] = $is_interfamily_related;

        return $this;
    }

    /**
     * Gets is_investor_purchase
     *
     * @return int
     */
    public function getIsInvestorPurchase()
    {
        return $this->container['is_investor_purchase'];
    }

    /**
     * Sets is_investor_purchase
     *
     * @param int $is_investor_purchase CoreLogic proprietary value that indicates if the buyer bought the property for investment purposes. 0 = not applicable, 1= applicable.
     *
     * @return $this
     */
    public function setIsInvestorPurchase($is_investor_purchase)
    {
        $this->container['is_investor_purchase'] = $is_investor_purchase;

        return $this;
    }

    /**
     * Gets is_resale
     *
     * @return int
     */
    public function getIsResale()
    {
        return $this->container['is_resale'];
    }

    /**
     * Sets is_resale
     *
     * @param int $is_resale CoreLogic standardized value that indicates whether the transaction is considered a resale of an existing property. 0 = not applicable, 1= applicable.
     *
     * @return $this
     */
    public function setIsResale($is_resale)
    {
        $this->container['is_resale'] = $is_resale;

        return $this;
    }

    /**
     * Gets is_short_sale
     *
     * @return int
     */
    public function getIsShortSale()
    {
        return $this->container['is_short_sale'];
    }

    /**
     * Sets is_short_sale
     *
     * @param int $is_short_sale CoreLogic proprietary indicator that identifies if the property sale is considered a short sale.  0 = not applicable, 1= applicable.
     *
     * @return $this
     */
    public function setIsShortSale($is_short_sale)
    {
        $this->container['is_short_sale'] = $is_short_sale;

        return $this;
    }

    /**
     * Gets is_foreclosure_reo
     *
     * @return int
     */
    public function getIsForeclosureReo()
    {
        return $this->container['is_foreclosure_reo'];
    }

    /**
     * Sets is_foreclosure_reo
     *
     * @param int $is_foreclosure_reo CoreLogic proprietary value that indicates whether the transaction was a completed foreclosure where the bank took back ownership of the property (REO).  0 = not applicable, 1= applicable.
     *
     * @return $this
     */
    public function setIsForeclosureReo($is_foreclosure_reo)
    {
        $this->container['is_foreclosure_reo'] = $is_foreclosure_reo;

        return $this;
    }

    /**
     * Gets is_foreclosure_reo_sale
     *
     * @return int
     */
    public function getIsForeclosureReoSale()
    {
        return $this->container['is_foreclosure_reo_sale'];
    }

    /**
     * Sets is_foreclosure_reo_sale
     *
     * @param int $is_foreclosure_reo_sale CoreLogic proprietary value that indicates that the bank sold the REO to a third party. 0 = not applicable, 1= applicable.
     *
     * @return $this
     */
    public function setIsForeclosureReoSale($is_foreclosure_reo_sale)
    {
        $this->container['is_foreclosure_reo_sale'] = $is_foreclosure_reo_sale;

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
