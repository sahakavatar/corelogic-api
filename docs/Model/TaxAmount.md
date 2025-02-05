# TaxAmount

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**billed_year** | **int** | The tax year for which the taxes were billed. | [optional] 
**delinquent_year** | **int** | County provided year the delinquent property taxes were due. Format: YYYY | [optional] 
**area_code** | **string** | CoreLogic standardized code that identifies the tax area associated with the parcel. | [optional] 
**area_code_description** | **string** | The corresponding description for the CoreLogic standardized code that identifies the tax area associated with the parcel. | [optional] 
**property_tax_rate** | **float** | County provided tax rate for the property based on Property Taxes billed through the county.. | [optional] 
**calculated_total_exemption_amount** | **float** | calculated Total Exemption Amount | [optional] 
**total_tax_exemption_amount** | **float** | County provided value of buildings and land that are exempt from taxes on the parcel. | [optional] 
**total_tax_amount** | **float** | Total billed property tax amount for the current tax year. | [optional] 
**county_tax_amount** | **float** | Property tax levied by an individual county. Used in counties with multiple taxing jurisdictions reporting separately. (Ex: a parcel may be subject to a County Tax, City Tax, and School District Tax) | [optional] 
**school_tax_amount** | **float** | Property tax levied by a school district. Used in counties with multiple taxing jurisdictions reporting separately. | [optional] 
**town_tax_amount** | **float** | Town Tax Amount | [optional] 
**village_tax_amount** | **float** | Property tax levied by a village. (Village is an administrative division within a town or township.) | [optional] 
**net_tax_amount** | **float** | Property tax amount less exemptions and/or credits. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

