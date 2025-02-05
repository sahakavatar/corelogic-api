# InteriorRooms

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**total_count** | **int** | Total number of rooms as supplied by the source. | [optional] 
**bedrooms_count** | **int** | CoreLogic calculated total bedrooms for the buildings. | [optional] 
**bathrooms_count** | **float** | Total number of rooms that are Bathrooms if this is the method of establishing bathroom property characterized by the source. Source values are whole numbers, although field allows for up to 2 decimal places in data deliveries. | [optional] 
**full_bathrooms_count** | **int** | Total number of full bath rooms as supplied by source. If source does not break out full versus partial Baths -field will be null in this case. | [optional] 
**half_bathrooms_count** | **int** | Total number of half bath rooms (typically comprised of a sink &amp; toilet) as supplied by source. If source does not break out full versus partial Baths &amp;#45; field will be null in this case. | [optional] 
**one_qtr_bathrooms_count** | **int** | Total number of quarter bath rooms (typically comprised only of a sink, as found in many laundry rooms) as supplied by source. If source does not break out full versus partial Baths &amp;#45; field will be null in this case. | [optional] 
**three_qtr_bathrooms_count** | **int** | Total number of three-quarter bath rooms (typically comprised of a sink, toilet &amp; shower stall) as supplied by source. If source does not break out full versus partial Baths &amp;#45; field will be null in this case. | [optional] 
**kitchens_count** | **int** | Total number of kitchens contained in the primary building. | [optional] 
**family_rooms_count** | **int** | Total number of family rooms contained in the primary building. | [optional] 
**living_rooms_count** | **int** | Total number of living rooms contained in the primary building. | [optional] 
**basement_rooms_count** | **int** | County provided total rooms located in the basement. Most jurisdictions count any room with a door, with the exception of bathrooms. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

