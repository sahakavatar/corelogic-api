# Swagger\Client\TransactionHistoryControllerApi

All URIs are relative to *https://property.corelogicapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**transactionHistory**](TransactionHistoryControllerApi.md#transactionhistory) | **GET** /v2/properties/{clip}/transaction-history | Transaction History Unrestricted

# **transactionHistory**
> \Swagger\Client\Model\TransactionHistoryData transactionHistory($clip)

Transaction History Unrestricted

Transaction History v2.0 API: Transaction History delivers Owner Transfer History and Mortgage History in a single API along with the mortgage coverage summary for the county.  Owner Transfer delivers buyer, seller, and transfer details on property transactions for sales and ownership transfers covering up to 50 years of sales history. Transactions include the individual change of ownership from both arms-length and non-arms-length transactions including cash, quitclaims, trust transfers, etc. with or without a mortgage(s). Mortgage History API provides nationwide property mortgage data for up to 50 years. Transactions include Primary/Junior mortgages & Purchase/Refi/Helocs. Details include borrower names, lender details with NMLS IDs, type of loan secured (e.g., conventional, FHA, VA), mortgage rate type, mortgage purpose (cash out first, consolidation, standalone subordinate, etc.), mortgage ARM features and mortgage indicators such as fixed rate, conforming loan, construction loan, private party and other indicators.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TransactionHistoryControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$clip = "clip_example"; // string | Unique Clip Id

try {
    $result = $apiInstance->transactionHistory($clip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionHistoryControllerApi->transactionHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clip** | **string**| Unique Clip Id |

### Return type

[**\Swagger\Client\Model\TransactionHistoryData**](../Model/TransactionHistoryData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

