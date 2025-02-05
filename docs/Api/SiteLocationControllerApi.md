# Swagger\Client\SiteLocationControllerApi

All URIs are relative to *https://property.corelogicapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**siteLocation**](SiteLocationControllerApi.md#sitelocation) | **GET** /v2/properties/{clip}/site-location | Site Location

# **siteLocation**
> \Swagger\Client\Model\SingleApiResponseSiteLocationData siteLocation($clip)

Site Location

Property location endpoints including legal, location and neighborhood, property use codes, property lot size and utilities on over 152 million residential and non-residential.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SiteLocationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$clip = "clip_example"; // string | Unique Clip Id

try {
    $result = $apiInstance->siteLocation($clip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteLocationControllerApi->siteLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clip** | **string**| Unique Clip Id |

### Return type

[**\Swagger\Client\Model\SingleApiResponseSiteLocationData**](../Model/SingleApiResponseSiteLocationData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

