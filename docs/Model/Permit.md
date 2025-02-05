# Permit

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique proprietary identifier assigned to each Building Permit entity. The Property entity&#x27;s Building Permit entity matches are reconciled onto this identifier. | [optional] 
**number** | **string** | The official permit number as provided by the permit issuing agency. | [optional] 
**most_recent_status_source** | **string** | The most recent stage of the permit in the building and approval process, standardized. This is paired with Permit Effective Date. | [optional] 
**building_permit_status** | [**\Swagger\Client\Model\BuildingPermitStatus[]**](BuildingPermitStatus.md) |  | [optional] 
**expiration_date** | **string** | The permit&#x27;s expiration date which can be assigned upon permit issuance. Certain permits are issued/approved but given a time limit for completion, i.e. expiration of approval by the city or county to complete the work. This field reflects the date, if any, when approved permits must complete the work on the subject property. Null if not applicable to a specific permit.  Format: \&quot;YYYY-MM-DD\&quot; | [optional] 
**filing_fees** | **float** | The building permit fees paid to the presiding building permit authority. In absence of a declared job value, the fees are a reasonable, directional estimate to the size and scale of a project. | [optional] 
**units_count** | **int** | The description of the nature of work requiring the permit as specified by the project owner on the permit. | [optional] 
**stories_count** | **int** | The number of stories in the relevant structure as reported on the building permit. | [optional] 
**area_square_feet** | **int** | The estimated square feet of the project as reported on the building permit. | [optional] 
**home_owner_name** | **string** | The name of the home/property owner as specified on the building permit. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

