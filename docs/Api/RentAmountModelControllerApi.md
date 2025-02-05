# Swagger\Client\RentAmountModelControllerApi

All URIs are relative to *https://property.corelogicapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**rentAmountModel**](RentAmountModelControllerApi.md#rentamountmodel) | **GET** /v2/avms/ram | Rent Amount Model

# **rentAmountModel**
> \Swagger\Client\Model\RentAmountModelResponseData rentAmountModel($clip)

Rent Amount Model

Rent Amount Model_v2 provides property level detail on modeled Estimated Rental Value of a property, which includes both Rental High Value and Rental Low Value, a Forecasted Standard Deviation Score and CAP Rate based on the model value. Rent Amount Model is used by Investors to evaluate potential properties for Rental Income.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RentAmountModelControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$clip = "clip_example"; // string | 

try {
    $result = $apiInstance->rentAmountModel($clip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RentAmountModelControllerApi->rentAmountModel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clip** | **string**|  |

### Return type

[**\Swagger\Client\Model\RentAmountModelResponseData**](../Model/RentAmountModelResponseData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

