# TaxLienTransaction

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tax_lien_recording_date** | **string** | The date the tax lien transaction was recorded at the county recorder or Register of Deeds office.  Format: YYYYMMDD | [optional] 
**tax_lien_recorded_document_number** | **string** | The tax lien&#x27;s unique document number assigned by the county recorder or Register of Deeds office. | [optional] 
**tax_lien_recorded_document_book_number** | **string** | The Book number used by some counties to record tax lien transactions. | [optional] 
**tax_lien_recorded_document_page_number** | **string** | The Page number used by some counties to record tax lien transactions. | [optional] 
**tax_lien_deed_category_type_code** | **string** | CoreLogic proprietary deed category type code that identifies the class of recorded tax lien legal document. Values: J &#x3D; Liens R &#x3D; Releases of liens | [optional] 
**tax_lien_document_type_code** | **string** | Type of tax lien document recorded. | [optional] 
**tax_lien_document_type_code_description** | **string** | Description of tax lien document recorded. | [optional] 
**tax_lien_creditor_company_name** | **string** | Entity on the Tax Lien. The following preferences are used to prioritize the entity on the document: 1st &#x3D; agency that requested recording 2nd &#x3D; entity responsible for notice/lien 3rd &#x3D; Other wording (in favor of, indebted to, to be paid to, etc.) Examples: County of Nevada Tax Collector Department of Child Support Services | [optional] 
**tax_lien_estimated_amount** | **float** | Dollar amount of the tax lien listed. Occasionally, the document does not include a tax lien amount. Examples: $4387.38 &#x3D; 4387.38 $13,765.00 &#x3D; 13765.00 | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

