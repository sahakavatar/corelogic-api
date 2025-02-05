# Swagger\Client\OwnershipTransfersControllerApi

All URIs are relative to *https://property.corelogicapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ownershipTransfers**](OwnershipTransfersControllerApi.md#ownershiptransfers) | **GET** /v2/properties/{clip}/ownership-transfers/{saleType}/{latest} | Ownership Transfers

# **ownershipTransfers**
> \Swagger\Client\Model\OwnershipTransfersProduct ownershipTransfers($clip, $sale_type, $latest)

Ownership Transfers

<p>Owner Transfer delivers buyer, seller, and transfer details on property transactions for sales and ownership transfers covering up to 50 years of sales history. Transactions include the individual change of ownership from both arms-length and non-arms-length transactions and includes all sales transactions including cash, quitclaims, trust transfers, etc. with or without a mortgage(s).</p> <table> <tr> <td> <table style=\"border-color: black; border-collapse: collapse;\" border=\"1\" cellpadding=\"5\"> <tbody> <tr style=\"height: 35px;\"> <td style=\"height: 35px;\" width=\"102\"> <p><strong>Sale Type</strong></p> </td> <td style=\"height: 35px;\" width=\"96\"> <p><strong>Values</strong></p> </td> </tr> <tr style=\"height: 35px;\"> <td style=\"height: 35px;\" width=\"102\"> <p>Market Sale</p> </td> <td style=\"height: 35px;\" width=\"96\"> <p>market</p> </td> </tr> <tr style=\"height: 35px;\"> <td style=\"height: 35px;\" width=\"102\"> <p>All Transfers</p> </td> <td style=\"height: 35px;\" width=\"96\"> <p>all</p> </td> </tr> </tbody> </table> </td> <td/> <td> <table style=\"border-color: black; border-collapse: collapse; float: left;\" border=\"1\" cellpadding=\"5\"> <tbody> <tr style=\"height: 35px;\"> <td style=\"height: 35px;\" width=\"102\"> <p><strong>Range</strong></p> </td> <td style=\"height: 35px;\" width=\"96\"> <p><strong>Values</strong></p> </td> </tr> <tr style=\"height: 35px;\"> <td style=\"height: 35px;\" width=\"102\"> <p>Most Recent</p> </td> <td style=\"height: 35px;\" width=\"96\"> <p>latest</p> </td> </tr> <tr style=\"height: 35px;\"> <td style=\"height: 35px;\" width=\"102\"> <p>Historical</p> </td> <td style=\"height: 35px;\" width=\"96\"> <p>(default)</p> </td> </tr> </tbody> </table> </td> </tr> </table> <br /> <p><strong>Last Market Sale</strong></p> <p>URL: GET ...v2/properties/:clip/ownership-transfers/market/latest</p> <p><strong>Most Recent Owner Transfer</strong></p> <p>URL: GET ...v2/properties/:clip/ownership-transfers/all/latest</p> <p><strong>Owner Transfer History</strong></p> <p>URL: GET ...v2/properties/:clip/ownership-transfers/all</p> <p><strong>Sales History</strong></p> <p>URL: GET ...v2/properties/:clip/ownership-transfers/market</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OwnershipTransfersControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$clip = "clip_example"; // string | Unique Clip Id
$sale_type = "sale_type_example"; // string | Sale type
$latest = "latest_example"; // string | latest or leave blank for Historical

try {
    $result = $apiInstance->ownershipTransfers($clip, $sale_type, $latest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OwnershipTransfersControllerApi->ownershipTransfers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clip** | **string**| Unique Clip Id |
 **sale_type** | **string**| Sale type |
 **latest** | **string**| latest or leave blank for Historical |

### Return type

[**\Swagger\Client\Model\OwnershipTransfersProduct**](../Model/OwnershipTransfersProduct.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

