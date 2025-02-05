# Swagger\Client\PropensityControllerApi

All URIs are relative to *https://property.corelogicapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**propensityToHELOC**](PropensityControllerApi.md#propensitytoheloc) | **GET** /v2/properties/propensity-scores/{clip}/heloc-score | Heloc Propensity Score by clip
[**propensityToListForRent**](PropensityControllerApi.md#propensitytolistforrent) | **GET** /v2/properties/propensity-scores/{clip}/rent-score | Rent Propensity Score by clip
[**propensityToListForSale**](PropensityControllerApi.md#propensitytolistforsale) | **GET** /v2/properties/propensity-scores/{clip}/sale-score | Sales Propensity Score by clip
[**propensityToPurchaseMortgage**](PropensityControllerApi.md#propensitytopurchasemortgage) | **GET** /v2/properties/propensity-scores/{clip}/purchase-score | Purchase Propensity Score by clip
[**propensityToRefinance**](PropensityControllerApi.md#propensitytorefinance) | **GET** /v2/properties/propensity-scores/{clip}/refinance-score | Refinance Propensity Score by clip

# **propensityToHELOC**
> \Swagger\Client\Model\SingleApiResponsePropensityData propensityToHELOC($clip)

Heloc Propensity Score by clip

This Propensity Score delivers insight on the likelihood of an event occurring in the next six months, giving a competitive edge to your business. Gain insight by knowing the Propensity that an equity line of credit will opened for the property (in the next six months)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PropensityControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$clip = "clip_example"; // string | Unique Clip Id

try {
    $result = $apiInstance->propensityToHELOC($clip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropensityControllerApi->propensityToHELOC: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clip** | **string**| Unique Clip Id |

### Return type

[**\Swagger\Client\Model\SingleApiResponsePropensityData**](../Model/SingleApiResponsePropensityData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **propensityToListForRent**
> \Swagger\Client\Model\SingleApiResponsePropensityData propensityToListForRent($clip)

Rent Propensity Score by clip

This Propensity Score delivers insight on the likelihood of an event occurring in the next six months, giving a competitive edge to your business. Gain insight by knowing the Propensity of the property to be listed for rent (in the next 6 months)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PropensityControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$clip = "clip_example"; // string | Unique Clip Id

try {
    $result = $apiInstance->propensityToListForRent($clip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropensityControllerApi->propensityToListForRent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clip** | **string**| Unique Clip Id |

### Return type

[**\Swagger\Client\Model\SingleApiResponsePropensityData**](../Model/SingleApiResponsePropensityData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **propensityToListForSale**
> \Swagger\Client\Model\SingleApiResponsePropensityData propensityToListForSale($clip)

Sales Propensity Score by clip

This Propensity Score delivers insight on the likelihood of an event occurring in the next six months, giving a competitive edge to your business. Gain insight by knowing the Propensity of the property to be listed for sale (in the next 6 months)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PropensityControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$clip = "clip_example"; // string | Unique Clip Id

try {
    $result = $apiInstance->propensityToListForSale($clip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropensityControllerApi->propensityToListForSale: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clip** | **string**| Unique Clip Id |

### Return type

[**\Swagger\Client\Model\SingleApiResponsePropensityData**](../Model/SingleApiResponsePropensityData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **propensityToPurchaseMortgage**
> \Swagger\Client\Model\SingleApiResponsePropensityData propensityToPurchaseMortgage($clip)

Purchase Propensity Score by clip

This Propensity Score delivers insight on the likelihood of an event occurring in the next six months, giving a competitive edge to your business. Gain insight by knowing the Propensity for the household to apply for a new purchase loan (in the next 6 months)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PropensityControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$clip = "clip_example"; // string | Unique Clip Id

try {
    $result = $apiInstance->propensityToPurchaseMortgage($clip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropensityControllerApi->propensityToPurchaseMortgage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clip** | **string**| Unique Clip Id |

### Return type

[**\Swagger\Client\Model\SingleApiResponsePropensityData**](../Model/SingleApiResponsePropensityData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **propensityToRefinance**
> \Swagger\Client\Model\SingleApiResponsePropensityData propensityToRefinance($clip)

Refinance Propensity Score by clip

This Propensity Score delivers insight on the likelihood of an event occurring in the next six months, giving a competitive edge to your business. Gain insight by knowing the Propensity that the property will be the subject of a refinance loan (closed, in the next six months)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PropensityControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$clip = "clip_example"; // string | Unique Clip Id

try {
    $result = $apiInstance->propensityToRefinance($clip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropensityControllerApi->propensityToRefinance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clip** | **string**| Unique Clip Id |

### Return type

[**\Swagger\Client\Model\SingleApiResponsePropensityData**](../Model/SingleApiResponsePropensityData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

