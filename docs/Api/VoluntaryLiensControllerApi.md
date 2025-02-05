# Swagger\Client\VoluntaryLiensControllerApi

All URIs are relative to *https://property.corelogicapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**openLienEquityAndLTVSummary**](VoluntaryLiensControllerApi.md#openlienequityandltvsummary) | **GET** /v2/properties/{clip}/liens | Open Lien Equity and LTV Summary

# **openLienEquityAndLTVSummary**
> \Swagger\Client\Model\SingleApiResponseLiensData openLienEquityAndLTVSummary($clip)

Open Lien Equity and LTV Summary

Provides a summary view of a Property with number of Open Liens, Purchase Amount, Original Loan to Value (LTV), Estimated Equity and Estimated Loan to Value (LTV).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VoluntaryLiensControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$clip = "clip_example"; // string | Unique Clip Id

try {
    $result = $apiInstance->openLienEquityAndLTVSummary($clip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoluntaryLiensControllerApi->openLienEquityAndLTVSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clip** | **string**| Unique Clip Id |

### Return type

[**\Swagger\Client\Model\SingleApiResponseLiensData**](../Model/SingleApiResponseLiensData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

