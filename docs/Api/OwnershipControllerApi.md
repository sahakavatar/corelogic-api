# Swagger\Client\OwnershipControllerApi

All URIs are relative to *https://property.corelogicapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ownership**](OwnershipControllerApi.md#ownership) | **GET** /v2/properties/{clip}/ownership | Ownership

# **ownership**
> \Swagger\Client\Model\OwnershipResponseData ownership($clip)

Ownership

Includes up to 4 owners, owner addresses and other owner details on over 152 million residential and non-residential properties.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OwnershipControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$clip = "clip_example"; // string | Unique Clip Id

try {
    $result = $apiInstance->ownership($clip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OwnershipControllerApi->ownership: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clip** | **string**| Unique Clip Id |

### Return type

[**\Swagger\Client\Model\OwnershipResponseData**](../Model/OwnershipResponseData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

