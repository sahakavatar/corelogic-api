# Swagger\Client\EnrichedVoluntaryLiensControllerApi

All URIs are relative to *https://property.corelogicapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**openVoluntaryLiensEnriched**](EnrichedVoluntaryLiensControllerApi.md#openvoluntaryliensenriched) | **GET** /v2/properties/liens/enriched/{clip} | Open Voluntary Liens Enriched Risk Management

# **openVoluntaryLiensEnriched**
> \Swagger\Client\Model\SingleApiResponseEnrichedLiensRiskData openVoluntaryLiensEnriched($clip)

Open Voluntary Liens Enriched Risk Management

Open Voluntary Liens Enriched delivers data for properties which have 'open' mortgage liens and includes, estimated Unpaid Principal Balance (UPB) and estimated Present Loan to Value (PLTV), open voluntary (mortgage) liens and lender intelligence.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnrichedVoluntaryLiensControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$clip = "clip_example"; // string | Unique Clip Id

try {
    $result = $apiInstance->openVoluntaryLiensEnriched($clip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnrichedVoluntaryLiensControllerApi->openVoluntaryLiensEnriched: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clip** | **string**| Unique Clip Id |

### Return type

[**\Swagger\Client\Model\SingleApiResponseEnrichedLiensRiskData**](../Model/SingleApiResponseEnrichedLiensRiskData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

