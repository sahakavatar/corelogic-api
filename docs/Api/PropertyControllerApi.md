# Swagger\Client\PropertyControllerApi

All URIs are relative to *https://property.corelogicapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**geocode**](PropertyControllerApi.md#geocode) | **GET** /v2/properties/search/geocode | Property search by address, city, state, zip code and apn with Geocode results
[**propertySearch**](PropertyControllerApi.md#propertysearch) | **GET** /v2/properties/search | Property search by address, city, state, zip code and apn
[**propertySearchByOwnerS**](PropertyControllerApi.md#propertysearchbyowners) | **GET** /v2/properties/search/owner | Property search by Address or APN or Owner

# **geocode**
> \Swagger\Client\Model\GeocodeProduct geocode($street_address, $city, $state, $zip_code, $apn, $county, $county_code, $best_match)

Property search by address, city, state, zip code and apn with Geocode results

This API returns a list of properties that match the given search criteria.<br> <br> To search for Properties by address, one of the following minimum search criteria must be specified: <ul> <li>{streetAddress, city, state}</li> <li>{streetAddress, zipCode}</li> </ul> To search for Properties by Assessor Parcel Number (APN), one of the following minimum search criteria must be specified: <ul> <li>{apn, state, county}</li> <li>{apn, zipCode}</li> <li>{apn, countyCode}</li> </ul> Best Match: Addresses may match to more than one property. When true is provided for bestMatch, a single, best matched property is returned. When false is provided for bestMatch, all matched properties are returned. This is an optional field and if left blank, defaults to 'false'. <br><br> It is recommended that you provide as many attributes as possible to improve the accuracy of the results.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: property_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PropertyControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$street_address = "street_address_example"; // string | Address line of the address
$city = "city_example"; // string | Name of the City
$state = "state_example"; // string | State code (exact match)
$zip_code = "zip_code_example"; // string | 5-digit ZIP code (exact match)
$apn = "apn_example"; // string | APN of the property
$county = "county_example"; // string | Name of the County (exact match)
$county_code = "county_code_example"; // string | County code
$best_match = "false"; // string | true/false, true is required for bestMatch only, default is false

try {
    $result = $apiInstance->geocode($street_address, $city, $state, $zip_code, $apn, $county, $county_code, $best_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyControllerApi->geocode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **street_address** | **string**| Address line of the address | [optional]
 **city** | **string**| Name of the City | [optional]
 **state** | **string**| State code (exact match) | [optional]
 **zip_code** | **string**| 5-digit ZIP code (exact match) | [optional]
 **apn** | **string**| APN of the property | [optional]
 **county** | **string**| Name of the County (exact match) | [optional]
 **county_code** | **string**| County code | [optional]
 **best_match** | **string**| true/false, true is required for bestMatch only, default is false | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\GeocodeProduct**](../Model/GeocodeProduct.md)

### Authorization

[property_auth](../../README.md#property_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **propertySearch**
> \Swagger\Client\Model\PropertySearchProduct propertySearch($street_address, $city, $state, $zip_code, $apn, $county, $county_code, $best_match)

Property search by address, city, state, zip code and apn

This API returns a list of properties that match the given search criteria.<br> <br> To search for Properties by address, one of the following minimum search criteria must be specified: <ul> <li>{streetAddress, city, state}</li> <li>{streetAddress, zipCode}</li> </ul> To search for Properties by Assessor Parcel Number (APN), one of the following minimum search criteria must be specified: <ul> <li>{apn, state, county}</li> <li>{apn, zipCode}</li> <li>{apn, countyCode}</li> </ul> Best Match: Addresses may match to more than one property. When true is provided for bestMatch, a single, best matched property is returned. When false is provided for bestMatch, all matched properties are returned. This is an optional field and if left blank, defaults to 'false'. <br><br> It is recommended that you provide as many attributes as possible to improve the accuracy of the results.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: property_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PropertyControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$street_address = "street_address_example"; // string | Address line of the address
$city = "city_example"; // string | Name of the City
$state = "state_example"; // string | State code (exact match)
$zip_code = "zip_code_example"; // string | 5-digit ZIP code (exact match)
$apn = "apn_example"; // string | APN of the property
$county = "county_example"; // string | Name of the County (exact match)
$county_code = "county_code_example"; // string | County code
$best_match = "false"; // string | true/false, true is required for bestMatch only, default is false

try {
    $result = $apiInstance->propertySearch($street_address, $city, $state, $zip_code, $apn, $county, $county_code, $best_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyControllerApi->propertySearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **street_address** | **string**| Address line of the address | [optional]
 **city** | **string**| Name of the City | [optional]
 **state** | **string**| State code (exact match) | [optional]
 **zip_code** | **string**| 5-digit ZIP code (exact match) | [optional]
 **apn** | **string**| APN of the property | [optional]
 **county** | **string**| Name of the County (exact match) | [optional]
 **county_code** | **string**| County code | [optional]
 **best_match** | **string**| true/false, true is required for bestMatch only, default is false | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\PropertySearchProduct**](../Model/PropertySearchProduct.md)

### Authorization

[property_auth](../../README.md#property_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **propertySearchByOwnerS**
> \Swagger\Client\Model\PropertySearchByOwnerNameProduct propertySearchByOwnerS($street_address, $city, $state, $zip_code, $apn, $owner, $county, $county_code)

Property search by Address or APN or Owner

This API returns a list of properties that match the given search criteria.<br> <br> To search for Properties by address, one of the following minimum search criteria must be specified: <ul> <li>{streetAddress, city, state}</li> <li>{streetAddress, zipCode}</li> </ul> To search for Properties by Assessor Parcel Number (APN), one of the following minimum search criteria must be specified: <ul> <li>{apn, state, county}</li> <li>{apn, zipCode}</li> <li>{apn, countyCode}</li> </ul> To search for Properties by address and Owner, the following minimum search criteria must be specified:  <ul> <li>{streetAddress, city, state, Name (format below)}</li> <li>{streetAddress, zipCode, Name (format below)}</li> <li>Full name: LastName FirstName MiddleInitial (no punctuations) recommended Partial name: LastName or FirstName</li> </ul> It is recommended that you provide as many attributes as possible to improve the accuracy of the results.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: property_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PropertyControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$street_address = "street_address_example"; // string | Address line of the address
$city = "city_example"; // string | Name of the City
$state = "state_example"; // string | State code (exact match)
$zip_code = "zip_code_example"; // string | 5-digit ZIP code (exact match)
$apn = "apn_example"; // string | APN of the property
$owner = array("owner_example"); // string[] | Supports up to two owners (separated by a comma) using the following formats: By full name: LastName FirstName MiddleInitial (Example: Smith John A, Jones Brenda P) By last name: LastName (Example: Smith, Jones) By combo of full name and last name or reverse: (Example1: Smith John A, Jones or Example2: Smith, Jones Brenda P)
$county = "county_example"; // string | Name of the County (exact match)
$county_code = "county_code_example"; // string | County code

try {
    $result = $apiInstance->propertySearchByOwnerS($street_address, $city, $state, $zip_code, $apn, $owner, $county, $county_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyControllerApi->propertySearchByOwnerS: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **street_address** | **string**| Address line of the address | [optional]
 **city** | **string**| Name of the City | [optional]
 **state** | **string**| State code (exact match) | [optional]
 **zip_code** | **string**| 5-digit ZIP code (exact match) | [optional]
 **apn** | **string**| APN of the property | [optional]
 **owner** | [**string[]**](../Model/string.md)| Supports up to two owners (separated by a comma) using the following formats: By full name: LastName FirstName MiddleInitial (Example: Smith John A, Jones Brenda P) By last name: LastName (Example: Smith, Jones) By combo of full name and last name or reverse: (Example1: Smith John A, Jones or Example2: Smith, Jones Brenda P) | [optional]
 **county** | **string**| Name of the County (exact match) | [optional]
 **county_code** | **string**| County code | [optional]

### Return type

[**\Swagger\Client\Model\PropertySearchByOwnerNameProduct**](../Model/PropertySearchByOwnerNameProduct.md)

### Authorization

[property_auth](../../README.md#property_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

