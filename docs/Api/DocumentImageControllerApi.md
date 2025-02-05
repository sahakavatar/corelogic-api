# Swagger\Client\DocumentImageControllerApi

All URIs are relative to *https://property.corelogicapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**recordedDocumentImages**](DocumentImageControllerApi.md#recordeddocumentimages) | **GET** /v2/properties/document-images/{product} | 

# **recordedDocumentImages**
> \Swagger\Client\Model\DocumentImageResponseData recordedDocumentImages($product, $fips_code, $recording_date, $document_number, $secondary_document_number, $document_type, $output_type)



Document Images API V2 provides direct access to retrieve document images for a variety of property-related document types. These images are recorded at the county-level and include real property records, also known as 'official records.' Images include hundreds of recorded document types  including deeds, mortgages, liens, releases, assignments, transfers, etc.<br> <br> To search for Documents, the following minimum search criteria must be specified:<br> <br> <ul> <li>{Recorded Document Images Product}</li> <li>{Fips Code}</li> <li>{Recording Date}</li> <li>{Document Number}</li> </ul> Additionally, one or more of the following optional search criteria to filter the result set can be specified:<br> <br> <ul> <li>{Secondary Document Number}</li> <li>{Document Type}</li> <li>{Output Type}</li> </ul> It is recommended that you provide as many attributes as possible to improve the accuracy of the results.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DocumentImageControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$product = "product_example"; // string | 
$fips_code = "fips_code_example"; // string | 5 digits; first two identify State, next three identify County
$recording_date = "recording_date_example"; // string | Provide full date as YYYYMMDD or year as YYYY
$document_number = "document_number_example"; // string | examples:  3205068  000757-00075
$secondary_document_number = "secondary_document_number_example"; // string | examples:  3205068  000757-00075
$document_type = "document_type_example"; // string | 
$output_type = "output_type_example"; // string | PDF | TIFF (default is PDF if not specified)

try {
    $result = $apiInstance->recordedDocumentImages($product, $fips_code, $recording_date, $document_number, $secondary_document_number, $document_type, $output_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentImageControllerApi->recordedDocumentImages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product** | **string**|  |
 **fips_code** | **string**| 5 digits; first two identify State, next three identify County |
 **recording_date** | **string**| Provide full date as YYYYMMDD or year as YYYY |
 **document_number** | **string**| examples:  3205068  000757-00075 |
 **secondary_document_number** | **string**| examples:  3205068  000757-00075 | [optional]
 **document_type** | **string**|  | [optional]
 **output_type** | **string**| PDF | TIFF (default is PDF if not specified) | [optional]

### Return type

[**\Swagger\Client\Model\DocumentImageResponseData**](../Model/DocumentImageResponseData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

