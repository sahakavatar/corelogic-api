# Swagger\Client\SolarAndPaceControllerApi

All URIs are relative to *https://property.corelogicapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**solarAndPACELiens**](SolarAndPaceControllerApi.md#solarandpaceliens) | **GET** /v2/properties/liens/SolarPACE-lien/{clip} | 

# **solarAndPACELiens**
> \Swagger\Client\Model\SolarPACELiensRootResponse solarAndPACELiens($clip)



Solar and PACE Liens API provides a broad look into the status of Solar contracts and PACE Liens related to a subject property (CLIP). Property-related Solar and PACE Liens against a property from services provided to the property.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SolarAndPaceControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$clip = "clip_example"; // string | Corelogic unique identification number assigned to each property.

try {
    $result = $apiInstance->solarAndPACELiens($clip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SolarAndPaceControllerApi->solarAndPACELiens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clip** | **string**| Corelogic unique identification number assigned to each property. |

### Return type

[**\Swagger\Client\Model\SolarPACELiensRootResponse**](../Model/SolarPACELiensRootResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

