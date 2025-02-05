# LandUseAndZoningCodes

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**property_type_code** | **string** | A CoreLogic general code used to easily recognize specific property types (e.g. Single Family Residence, Condominium, Commercial). This value was determined from property information upon receipt of the transaction and reflects the Property Indicator as a static value at that point in time. | [optional] 
**property_type_code_description** | **string** | Described value of the primaryTypeCode. | [optional] 
**land_use_code** | **string** | A CoreLogic established Land Use code converted from various county Land Use codes to aid in search and extract functions. This value was captured from property information upon receipt of the transaction and reflects the Land Use as a static value at that point in time. | [optional] 
**land_use_code_description** | **string** | Described value of landUseCode. | [optional] 
**state_land_use_description** | **string** | State-specific secondary Land Use provide by the county.Â  This value was captured from property information upon receipt of the transaction and reflects the State Land Use Description as a static value at that point in time. | [optional] 
**county_land_use_description** | **string** | Primary (e.g. highest) Land Use as established by the county or local taxing administration.Â  This value was captured from property information upon receipt of the transaction and reflects the County Use Description as a static value at that point in time. | [optional] 
**zoning_code** | **string** | The data contained in this field is based upon County and/or Local established Zoning Codes and is not converted by CoreLogic. | [optional] 
**zoning_code_description** | **string** | County provided zoning code description that describes the allowable land use for the real property. | [optional] 
**is_manufactured_home** | **string** | This field is populated with a \&quot;Y\&quot; if a Manufactured Home is present on the parcel. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

