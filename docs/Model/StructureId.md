# StructureId

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sequence_number** | **int** | This internal sequence number is used to ensure uniqueness of the Building Key. | [optional] 
**composite_building_linkage_key** | **string** | Unique building key. This is a fixed-width field, with the APN component padded with blanks out to 45 characters within the composite key. | [optional] 
**building_name** | **string** | County provided name for the building. Prevalent in commercial or multi-family buildings. | [optional] 
**building_number** | **string** | County provided number of the building that uniquely identifies the building from others on the same parcel. | [optional] 
**building_section_number** | **int** | County provided building record section indicator that represents one section of the building only. This is only found in large commercial and multi-family buildings that are divided into multiple sections. Example: West Wing and East Wing. | [optional] 
**building_comments** | **string** | Additional building description information. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

