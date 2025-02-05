# RecordedPropertyAddress

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**street_address** | **string** | Full Situs address (not including City/St/Zip) (e.g. 123 N Main St) | [optional] 
**street_address_parsed** | [**\Swagger\Client\Model\StreetAddressParsed**](StreetAddressParsed.md) |  | [optional] 
**city** | **string** | The city associated with the property address. | [optional] 
**state** | **string** | The two-letter USPS postal abbreviation associated with the state / protectorates / commonwealth (e.g., CA, VI). | [optional] 
**zip_code** | **string** | Code assigned by the USPS. This is populated by various source files and other proprietary and non-proprietary processes. Data may be the 5-digit zip or 9-digit Zip+4 (e.g., 00501 or 954630042). | [optional] 
**carrier_route** | **string** | This is the four digit code used by the local mail carrier to identify the delivery path. | [optional] 
**county** | **string** | Situs county name. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

