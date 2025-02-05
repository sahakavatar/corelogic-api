# Swagger\Client\PropertyDetailControllerApi

All URIs are relative to *https://property.corelogicapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**propertyDetail**](PropertyDetailControllerApi.md#propertydetail) | **GET** /v2/properties/{clip}/property-detail | Property Detail query for multiple blocks and products.

# **propertyDetail**
> \Swagger\Client\Model\PropertyDetailResponse propertyDetail($clip)

Property Detail query for multiple blocks and products.

Nationwide, comprehensive property data for over 152 million parcels is available with Property from CoreLogic. This product delivers a robust set of property records which includes parcel and subdivision information, geospatial data, property owner and owner mailing details, property value and tax information including tax assessment, tax amount and tax exemption indicators and an extensive set of property characteristics that describe the property's structure attributes. The data also includes the most recent purchase transaction information including sale recording date, sale amount, seller name and more. Please note, Property Detail report is a composite report that comprises of 6 other individual reports Buildings, Last Market Sale, Most Recent Owner Transfer, Ownership,Site-Location and Tax Assessments.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PropertyDetailControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$clip = "clip_example"; // string | Unique Clip Id

try {
    $result = $apiInstance->propertyDetail($clip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyDetailControllerApi->propertyDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clip** | **string**| Unique Clip Id |

### Return type

[**\Swagger\Client\Model\PropertyDetailResponse**](../Model/PropertyDetailResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

