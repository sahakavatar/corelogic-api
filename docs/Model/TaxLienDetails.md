# TaxLienDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tax_lien_alias_type_code** | **string** | Identifies the reason for the alias name as in Doing Business As (DBA).   &lt;br&gt;Values: AAR &#x3D; Also Appear on Record, ABN &#x3D; Also Business Name, ADO &#x3D; A Division Of, AKA &#x3D; Also Known As, ASO &#x3D; A Subrogee Of, ATF &#x3D; As Trustee For, CKA &#x3D; Commonly Known As, DBA &#x3D; Doing Business As, FBO &#x3D; For Benefit Of, FDBA &#x3D; Formerly Doing Business As, FKA &#x3D; Formerly Known As, FNO &#x3D; Full Name Of, HTTA &#x3D; Has Taken Title As, KA &#x3D; Known As, KBM &#x3D; Known Beyond Marriage, KNA &#x3D; Known Now As, NBM &#x3D; Name Beyond Marriage, NKA &#x3D; Now Known As, PDBA &#x3D; Previously Doing Business As, PKA &#x3D; Previously Known As, QI &#x3D; Qualified Intermediary, SBM &#x3D; Successor By Merger/To, SKA &#x3D; Sometime Known As/Same Known As, TA &#x3D; Titled As, UTA &#x3D; Under Trust Agreement Of, WATA &#x3D; Who Acquired Titled As. | [optional] 
**tax_lien_alias_type_code_description** | **string** | Alias name reason type description. | [optional] 
**taxpayer_id_number** | **string** | Taxpayer ID number that identifies the taxpayer (not a social security number) on federal, state, city and county tax liens and can include special characters, such as hyphens. Note: Multiple ID number records are created when multiple taxpayers or defendants are listed on a tax lien document. | [optional] 
**tax_lien_number** | **string** | Tax lien, serial or certificate number. | [optional] 
**tax_lien_date** | **string** | If the document is a tax lien release, this date is the tax lien release date. Otherwise, this date is the tax lien date, which is the date the document was executed at its source - county, city, federal or state.  Format: YYYYMMDD | [optional] 
**tax_lien_period_begin_minimum_date** | **string** | Beginning date of the tax lien period.  Format: YYYYMMDD | [optional] 
**tax_lien_period_end_maximum_date** | **string** | End date of the tax lien period Format: YYYYMMDD | [optional] 
**tax_lien_last_refiling_or_lien_extension_date** | **string** | Last date to refile or extend a tax lien, as noted on the tax lien document.  Format: YYYYMMDD | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

