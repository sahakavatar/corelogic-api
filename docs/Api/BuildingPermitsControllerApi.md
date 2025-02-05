# Swagger\Client\BuildingPermitsControllerApi

All URIs are relative to *https://property.corelogicapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**buildingPermits**](BuildingPermitsControllerApi.md#buildingpermits) | **GET** /v2/properties/{clip}/building-permits | BuildingPermits

# **buildingPermits**
> \Swagger\Client\Model\BuildingPermits buildingPermits($clip)

BuildingPermits

Includes up to 4 owners, owner addresses and other owner details on over 152 million residential and non-residential properties.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildingPermitsControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$clip = "clip_example"; // string | Unique Clip Id

try {
    $result = $apiInstance->buildingPermits($clip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildingPermitsControllerApi->buildingPermits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clip** | **string**| Unique Clip Id |

### Return type

[**\Swagger\Client\Model\BuildingPermits**](../Model/BuildingPermits.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

