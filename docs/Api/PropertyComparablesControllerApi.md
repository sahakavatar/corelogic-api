# Swagger\Client\PropertyComparablesControllerApi

All URIs are relative to *https://property.corelogicapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**comparables**](PropertyComparablesControllerApi.md#comparables) | **GET** /v2/properties/{clipId}/comparables | 

# **comparables**
> \Swagger\Client\Model\PropertyComparablesRootResponse comparables($clip_id, $min_beds, $max_beds, $min_baths, $max_baths, $min_bldg_sq_ft, $max_bldg_sq_ft, $bldg_sq_ft_variance, $min_lot_sq_ft, $max_lot_sq_ft, $lot_sq_ft_variance, $search_distance, $max_comps, $months_back, $land_use, $sort_by)



Comparables API provides comparable data on recently sold properties that are in proximity to the subject property (CLIP).   Additional filters that can be applied include Number of Bedrooms/Bathrooms; Property Square Footage;  Number of Properties returned and other filters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PropertyComparablesControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$clip_id = "clip_id_example"; // string | The id of property which is a subject for search for similar properties.
$min_beds = 56; // int | Minimum bedrooms for search.
$max_beds = 56; // int | Maximum bedrooms for search.
$min_baths = 56; // int | Minimum bathrooms for search.
$max_baths = 56; // int | Maximum bathrooms for search.
$min_bldg_sq_ft = 1.2; // float | Minimum building square feet for search.
$max_bldg_sq_ft = 1.2; // float | Maximum building square feet for search.
$bldg_sq_ft_variance = 1.2; // float | Building Square Feet variance in percentage. If supplied, this will not override values specified in minBldgSqFt and maxBldgSqFt.
$min_lot_sq_ft = 1.2; // float | Minimum lot square feet for search.
$max_lot_sq_ft = 1.2; // float | Maximum lot square feet for search.
$lot_sq_ft_variance = 1.2; // float | Lot Square Feet variance in percentage. If supplied, this will not override values specified in minLotSqFt and maxLotSqFt.
$search_distance = 0.5; // float | Maximum distance in miles from subject property for search radius. Default is 0.5 miles.
$max_comps = 10; // int | Maximum number of comparables returned.  Default is 10. Max is 100.
$months_back = 9; // int | Number of months back to search for comparable sales. Default is 9. Max is 36.
$land_use = "land_use_example"; // string | Land use code for search. Default is same as subject property.
$sort_by = "sort_by_example"; // string | Sort By Distance (ascending) and Sale_Date (latest first)

try {
    $result = $apiInstance->comparables($clip_id, $min_beds, $max_beds, $min_baths, $max_baths, $min_bldg_sq_ft, $max_bldg_sq_ft, $bldg_sq_ft_variance, $min_lot_sq_ft, $max_lot_sq_ft, $lot_sq_ft_variance, $search_distance, $max_comps, $months_back, $land_use, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyComparablesControllerApi->comparables: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clip_id** | **string**| The id of property which is a subject for search for similar properties. |
 **min_beds** | **int**| Minimum bedrooms for search. | [optional]
 **max_beds** | **int**| Maximum bedrooms for search. | [optional]
 **min_baths** | **int**| Minimum bathrooms for search. | [optional]
 **max_baths** | **int**| Maximum bathrooms for search. | [optional]
 **min_bldg_sq_ft** | **float**| Minimum building square feet for search. | [optional]
 **max_bldg_sq_ft** | **float**| Maximum building square feet for search. | [optional]
 **bldg_sq_ft_variance** | **float**| Building Square Feet variance in percentage. If supplied, this will not override values specified in minBldgSqFt and maxBldgSqFt. | [optional]
 **min_lot_sq_ft** | **float**| Minimum lot square feet for search. | [optional]
 **max_lot_sq_ft** | **float**| Maximum lot square feet for search. | [optional]
 **lot_sq_ft_variance** | **float**| Lot Square Feet variance in percentage. If supplied, this will not override values specified in minLotSqFt and maxLotSqFt. | [optional]
 **search_distance** | **float**| Maximum distance in miles from subject property for search radius. Default is 0.5 miles. | [optional] [default to 0.5]
 **max_comps** | **int**| Maximum number of comparables returned.  Default is 10. Max is 100. | [optional] [default to 10]
 **months_back** | **int**| Number of months back to search for comparable sales. Default is 9. Max is 36. | [optional] [default to 9]
 **land_use** | **string**| Land use code for search. Default is same as subject property. | [optional]
 **sort_by** | **string**| Sort By Distance (ascending) and Sale_Date (latest first) | [optional]

### Return type

[**\Swagger\Client\Model\PropertyComparablesRootResponse**](../Model/PropertyComparablesRootResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

