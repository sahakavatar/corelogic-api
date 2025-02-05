# CraComprehensiveAllResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cra_record_id** | **string** | An identifier that uniquely identifies a structure or a parcel within this dataset and run date. | [optional] 
**latitude** | **float** | CoreLogic proprietary parcel-centroid coordinate that specifies the north-south position of the center point of a parcel. The latitude contains numeric data values only conforming to the mask XX.ZZZZZZ, where the XX are the digits to the left of the decimal point, and ZZZZZZ are the digits to the right of the decimal point. Latitude is always a positive value north on the North American continent. | [optional] 
**longitude** | **float** | CoreLogic proprietary parcel-centroid coordinate that specifies the east-west position of the center point of a parcel. The longitude contains numeric data values only conforming to the mask -XXX.ZZZZZZ, where the XXX are the numeric digits to the left of the decimal point, and ZZZZZZ are the 6 numeric digits to the right of the decimal point. Longitude is negative on the North American continent. | [optional] 
**risk_type_score_group** | **string** | Groups where the scores are calculated (SFR, MFR, COM, IND, AGR, MUN - representing Single-Family Residential, Multi-Family Residential, Commercial, Industrial, Agricultural and Municipal). | [optional] 
**perils** | [**\Swagger\Client\Model\CraComprehensiveAllPeril[]**](CraComprehensiveAllPeril.md) | Peril Details | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

