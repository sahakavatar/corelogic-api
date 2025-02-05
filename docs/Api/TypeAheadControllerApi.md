# Swagger\Client\TypeAheadControllerApi

All URIs are relative to *https://property.corelogicapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addressTypeAhead**](TypeAheadControllerApi.md#addresstypeahead) | **GET** /v2/properties/typeahead | AddressTypeAhead

# **addressTypeAhead**
> \Swagger\Client\Model\TypeAheadResponse addressTypeAhead($input)

AddressTypeAhead

This API allows the client to type in a string address (any partial address).The data will return up to 10 address matches in which client may select appropriate match.  In addition this will include both the CLIP and V1 Identifier for each address.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TypeAheadControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$input = "input_example"; // string | 

try {
    $result = $apiInstance->addressTypeAhead($input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TypeAheadControllerApi->addressTypeAhead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input** | **string**|  |

### Return type

[**\Swagger\Client\Model\TypeAheadResponse**](../Model/TypeAheadResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

