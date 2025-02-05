# Swagger\Client\TaxAssessmentControllerApi

All URIs are relative to *https://property.corelogicapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**taxAssessments**](TaxAssessmentControllerApi.md#taxassessments) | **GET** /v2/properties/{clip}/tax-assessments/latest | Tax Assessments

# **taxAssessments**
> \Swagger\Client\Model\TaxAssessment taxAssessments($clip)

Tax Assessments

Delivers a robust set of data elements that provides property value information including tax assessment and tax amount. Collected from the county Tax Assessor by CoreLogic, full Tax Roll county refreshes can be updated as frequently as twice a year by county. CoreLogic maintains Tax Roll data for 99.9% of counties nationwide.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TaxAssessmentControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$clip = "clip_example"; // string | Unique Clip Id

try {
    $result = $apiInstance->taxAssessments($clip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxAssessmentControllerApi->taxAssessments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clip** | **string**| Unique Clip Id |

### Return type

[**\Swagger\Client\Model\TaxAssessment**](../Model/TaxAssessment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

