# Swagger\Client\MortgageControllerApi

All URIs are relative to *https://property.corelogicapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**currentMortgage**](MortgageControllerApi.md#currentmortgage) | **GET** /v2/properties/{clip}/mortgage/current | CurrentMortgage
[**mortgageHistory**](MortgageControllerApi.md#mortgagehistory) | **GET** /v2/properties/{clip}/mortgage | MortgageHistory

# **currentMortgage**
> \Swagger\Client\Model\MortgageTransactionProduct currentMortgage($clip)

CurrentMortgage

Current Mortgage API provides a view of current open mortgages for a given subject property. Transactions include Primary/Junior mortgages & Purchase/Refi/Helocs. Details include borrower names, lender details with NMLS IDs, type of loan secured (e.g., conventional, FHA, VA), mortgage rate type, mortgage purpose (cash out first, consolidation, standalone subordinate, etc.), mortgage ARM features and mortgage indicators such as fixed rate, conforming loan, construction loan, private party and other indicators.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MortgageControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$clip = 789; // int | Unique Clip Id

try {
    $result = $apiInstance->currentMortgage($clip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MortgageControllerApi->currentMortgage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clip** | **int**| Unique Clip Id |

### Return type

[**\Swagger\Client\Model\MortgageTransactionProduct**](../Model/MortgageTransactionProduct.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mortgageHistory**
> \Swagger\Client\Model\MortgageTransactionProduct mortgageHistory($clip)

MortgageHistory

Mortgage History API provides nationwide property mortgage data for up to 50 years. Transactions include Primary/Junior mortgages & Purchase/Refi/Helocs. Details include borrower names, lender details with NMLS IDs, type of loan secured (e.g., conventional, FHA, VA), mortgage rate type, mortgage purpose (cash out first, consolidation, standalone subordinate, etc.), mortgage ARM features and mortgage indicators such as fixed rate, conforming loan, construction loan, private party and other indicators.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MortgageControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$clip = 789; // int | Unique Clip Id

try {
    $result = $apiInstance->mortgageHistory($clip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MortgageControllerApi->mortgageHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clip** | **int**| Unique Clip Id |

### Return type

[**\Swagger\Client\Model\MortgageTransactionProduct**](../Model/MortgageTransactionProduct.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

