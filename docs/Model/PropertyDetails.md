# PropertyDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**actual_year_built** | **int** | This is the construction year of the original building on the parcel as provided by the county.  Not all counties maintain both Original and Effective Year Built. Null if not available from the source. Format: YYYY | [optional] 
**effective_year_built** | **int** | Typically this field reflects the first year the building was assessed with its current components (e.g., a building is originally constructed in 1960 and a bedroom and bath was added to the building in 1974. In this example, Year Built would be 1960 and the Effective Year Built would be 1974).   Certain counties only maintain one Year Built data element, and overlay Original Year Built with Effective Year Built if there was a structural change to the building that affected Assessed Value.  In these counties, Year Built will be null and Effective Year Built will contain the single data element provided by the source - examples include Fresno and San Diego counties.  Format: YYYY | [optional] 
**is_residential_property** | **string** | Indicates whether the property is residential. Y &#x3D; yes or NULL &#x3D; no or unknown. | [optional] 
**is_new_construction** | **int** | CoreLogic standardized value that indicates the ownership transfer/sale is for a newly constructed property - usually the seller is the Builder and identified from information on Grant Deed.   0 &#x3D; not applicable, 1&#x3D; applicable. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

