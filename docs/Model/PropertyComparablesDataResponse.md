# PropertyComparablesDataResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**clip** | **string** | CoreLogic unique identification number assigned to each comparable property. | [optional] 
**v1_property_id** | **string** | Unique identification number assigned to each comparable property in legacy application. | [optional] 
**baths** | **int** | Total number of rooms that are bathrooms in the comparable property. Format: whole number. | [optional] 
**bedrooms** | **int** | CoreLogic calculated total bedrooms for the building. | [optional] 
**building_square_feet** | **int** | The size of the building in square feet. This field is most commonly populated as an aggregate total when a county does not differentiate between living and non-living areas. | [optional] 
**city** | **string** | The city associated with the property address. | [optional] 
**distance** | **double** | The distance in miles from the subject property. | [optional] 
**latitude** | **double** | CoreLogic derived geographic coordinate that specifies the north-south position of a point based on United States Postal Service address data for the parcel. The latitude contains numeric data values only conforming to the mask XX.ZZZZZZ, where the XX are the digits to the left of the decimal point, and ZZZZZZ are the digits to the right of the decimal point. Latitude is always a positive value north on the North American continent. | [optional] 
**longitude** | **double** | CoreLogic derived geographic coordinate that specifies the east-west position of a point based on United States Postal Service address data for the parcel. The longitude contains numeric data values only conforming to the mask -XXX.ZZZZZZ, where the XXX are the numeric digits to the left of the decimal point, and ZZZZZZ are the 6 numeric digits to the right of the decimal point. Longitude is negative on the North American continent. | [optional] 
**lot_square_feet** | **int** | Total land mass in square feet. | [optional] 
**price_per_square_foot** | **float** | CoreLogic compiled and calculated listed property price per square feet. | [optional] 
**recording_date** | **string** | The date the sales transaction of the comparable property was recorded at the county. This date is generally considered the transfer of ownership date. Format: YYYYMMDD. | [optional] 
**sale_date** | **string** | Date the contract, deed or document of the comparable property was signed. Format: YYYYMMDD. | [optional] 
**sale_price** | **float** | Dollar amount of the most recent sale of the comparable  property. | [optional] 
**state** | **string** | The two-letter USPS postal abbreviation associated with the state / protectorates / commonwealth (e.g., CA, VI). | [optional] 
**street_address** | **string** | Full Situs address (not including City/St/Zip) (e.g. 123 N Main St) | [optional] 
**year_built** | **string** | This is the construction year of the original building on the parcel as provided by the county. Not all counties maintain both Original and Effective Year Built. Null if not available from the source. Format: YYYY | [optional] 
**zip** | **string** | Code assigned by the USPS. This is populated by various source files and other proprietary and non-proprietary processes. Data may be the 5-digit zip or 9-digit Zip+4 (e.g., 00501 or 954630042). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

