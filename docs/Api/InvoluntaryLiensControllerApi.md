# Swagger\Client\InvoluntaryLiensControllerApi

All URIs are relative to *https://property.corelogicapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**involuntaryLiens**](InvoluntaryLiensControllerApi.md#involuntaryliens) | **GET** /v2/properties/liens/involuntary-liens/{clipId} | 

# **involuntaryLiens**
> \Swagger\Client\Model\InvoluntaryLiensRootResponse involuntaryLiens($clip_id)



Involuntary Liens API provides a broad look into the status of non-Voluntary Liens related to a subject property (CLIP). Below are the liens included in this product.<br><br><b>Property HOA Liens:</b> HOA Liens are placed against a property by the Homeowners Association for unpaid HOA dues.<br><b>Property Mechanics Liens:</b> Mechanic's Liens are placed against a property by Service Companies for unpaid service fees.<br><b>Property Tax Liens:</b> Tax liens are placed against property by Taxing Authority for unpaid property taxes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InvoluntaryLiensControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$clip_id = "clip_id_example"; // string | 

try {
    $result = $apiInstance->involuntaryLiens($clip_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoluntaryLiensControllerApi->involuntaryLiens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clip_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\InvoluntaryLiensRootResponse**](../Model/InvoluntaryLiensRootResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

