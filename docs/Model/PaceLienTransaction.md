# PaceLienTransaction

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pace_lien_recording_date** | **string** | The date the PACE transaction was recorded at the county.  Format: YYYYMMDD | [optional] 
**pace_lien_deed_category_type_code** | **string** | CoreLogic proprietary deed category type code that identifies the class of recorded legal document. \&quot;J\&quot; for Pace Liens and Modifications and \&quot;R\&quot; for Releases. | [optional] 
**pace_lien_document_type_code** | **string** | The type of PACE Document. Options are: PX &#x3D; PACE Lien; PM &#x3D; PACE Modification; PZ &#x3D; PACE Release. | [optional] 
**pace_lien_recorded_document_number** | **string** | The Document Number of PACE Document used by some counties to catalog their recordings. | [optional] 
**pace_lien_recorded_document_book_number** | **string** | The Book Number of PACE Document used by some counties to catalog their recordings. | [optional] 
**pace_lien_recorded_document_page_number** | **string** | The Page Number of PACE Document used by some counties to catalog their recordings. | [optional] 
**pace_lien_total_assessment_amount** | **float** | Total Contractual Assessment amount (cost + fees) which is found in the body of NOA (Notice of Assessment) of PACE Document. | [optional] 
**pace_lien_assessment_date** | **string** | Date of PACE Assessment, if indicated on the document. If not indicated, the signature date will be used. Format: YYYYMMDD | [optional] 
**pace_lien_due_date** | **string** | Contractual Assessment Expiration Date of PACE Document. Format: YYYYMMDD | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

