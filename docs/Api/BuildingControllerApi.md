# Swagger\Client\BuildingControllerApi

All URIs are relative to *https://property.corelogicapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**buildings**](BuildingControllerApi.md#buildings) | **GET** /v2/properties/{clip}/buildings | Buildings

# **buildings**
> \Swagger\Client\Model\BuildingResponseData buildings($clip)

Buildings

Includes building features and attributes for each building on a parcel to provide expansive building details. Ideal for both residential and commercial properties.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildingControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$clip = "clip_example"; // string | Unique Clip Id

try {
    $result = $apiInstance->buildings($clip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildingControllerApi->buildings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clip** | **string**| Unique Clip Id |

### Return type

[**\Swagger\Client\Model\BuildingResponseData**](../Model/BuildingResponseData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

