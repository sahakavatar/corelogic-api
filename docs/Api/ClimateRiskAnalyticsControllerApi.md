# Swagger\Client\ClimateRiskAnalyticsControllerApi

All URIs are relative to *https://property.corelogicapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cRAAR5Comprehensive**](ClimateRiskAnalyticsControllerApi.md#craar5comprehensive) | **GET** /v2/properties/{clip}/climate-risk-analytics/ar5/comprehensive | Climate Risk Analytics - Comprehensive
[**cRAAR6Comprehensive**](ClimateRiskAnalyticsControllerApi.md#craar6comprehensive) | **GET** /v2/properties/{clip}/climate-risk-analytics/ar6/comprehensive | CRA-AR6-Comprehensive

# **cRAAR5Comprehensive**
> \Swagger\Client\Model\CraComprehensiveAllDataResponse cRAAR5Comprehensive($clip)

Climate Risk Analytics - Comprehensive

Climate Risk Analytics AR5 Comprehensive delivers property climate risk metrics including Composite Risk Score (CRS), scaled 1-100 representing the total risk to a property from all hazards, Average Annual Loss (AAL) per year and peril and Probable Maximum Loss (PML) outputs across multiple (50/100/250/500 year) time horizons, for approximately 140 million parcels across the U.S.  CoreLogic&apos;s physical risk model combines our proprietary datasets and models into a comprehensive single score that incorporates the following hazards: Earthquake, Wildfire, Inland Flood, Severe Convective Storm, Winter Storm, Hurricane/Tropical Storm Surge and Hurricane/Tropical Storm Wind.  Additionally, Representative Concentration Pathways (2.6, 4.5, and 8.5) prescribed by the Intergovernmental Panel on Climate Change (IPCC) model out forecasted hazard changes for the current year and years 2030, 2040 and 2050.  These metrics incorporate IPCC scenarios overlaid with CoreLogic&apos;s proprietary suite of hazard risk data & analytics and catastrophe models.  The result is climate risk metrics for each RCP scenario, down to the individual property level.  These economic measures are used in insurance markets, in the housing ecosystem and by financial services prudential regulators for supervisory stress testing and oversight.  The measures are also used by government agencies planning and maintaining infrastructure programs and by corporations.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClimateRiskAnalyticsControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$clip = "clip_example"; // string | Unique Clip Id

try {
    $result = $apiInstance->cRAAR5Comprehensive($clip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClimateRiskAnalyticsControllerApi->cRAAR5Comprehensive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clip** | **string**| Unique Clip Id |

### Return type

[**\Swagger\Client\Model\CraComprehensiveAllDataResponse**](../Model/CraComprehensiveAllDataResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cRAAR6Comprehensive**
> \Swagger\Client\Model\ClimateRiskAR6ClientResponse cRAAR6Comprehensive($clip)

CRA-AR6-Comprehensive

Climate Risk Analytics AR6 API delivers comprehensive parcel-level climate risk metrics across multiple Shared Socioeconomic Pathways (SSPs) to provide both current and future projections for climate risk impact. This includes individual hazard impacts along with Composite Risk Scores with financial impacts.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClimateRiskAnalyticsControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$clip = "clip_example"; // string | CoreLogic Unique identification number assigned to each property.

try {
    $result = $apiInstance->cRAAR6Comprehensive($clip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClimateRiskAnalyticsControllerApi->cRAAR6Comprehensive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clip** | **string**| CoreLogic Unique identification number assigned to each property. |

### Return type

[**\Swagger\Client\Model\ClimateRiskAR6ClientResponse**](../Model/ClimateRiskAR6ClientResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

