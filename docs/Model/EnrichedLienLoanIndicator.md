# EnrichedLienLoanIndicator

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enriched_conforming** | **int** | CoreLogic enriched value that indicates if the mortgage loan is considered a conforming loan.  The Enriched proprietary logic is designed to improve completeness and accuracy. Values:  0 or null &#x3D; not applicable, 1&#x3D; applicable. | [optional] 
**equity** | **int** | CoreLogic standardized value that indicates if the mortgage loan is an equity loan. Values:  0 or null &#x3D; not applicable, 1&#x3D; applicable. | [optional] 
**enriched_fha** | **int** | CoreLogic standardized value that indicates if the mortgage loan is an FHA (Federal Housing Authority) loan. 0 or null &#x3D; not applicable, 1&#x3D; applicable. | [optional] 
**construction** | **int** | CoreLogic standardized value that indicates if this mortgage is specifically for any type of construction on the property and is identified as a construction loan on the trust documents. 0 or null &#x3D; not applicable, 1&#x3D; applicable. | [optional] 
**private_party_lender** | **int** | CoreLogic standardized value that indicates if the mortgage loan lender is a private party or lender not currently listed in the CoreLogic Lender table. 0 or null &#x3D; not applicable, 1&#x3D; applicable. | [optional] 
**seller_carry_back** | **int** | CoreLogic standardized value that indicates if part or all of the mortgage loan is carried by the seller. 0 or null &#x3D; not applicable, 1&#x3D; applicable. | [optional] 
**planned_unit_development_rider** | **int** | Indicates if a Planned Unit Development (PUD) Rider was recorded with the mortgage loan. 0 or null &#x3D; not applicable, 1&#x3D; applicable. | [optional] 
**multifamily_rider** | **int** | Indicates if a Multifamily Rider was recorded with the mortgage loan. 0 or null &#x3D; not applicable, 1&#x3D; applicable. | [optional] 
**condominium_rider** | **int** | Indicates if a Condominium Rider was recorded with the mortgage loan. 0 or null &#x3D; not applicable, 1&#x3D; applicable. | [optional] 
**second_home_rider** | **int** | Indicates if a Second Home Rider was recorded with the mortgage loan. 0 or null &#x3D; not applicable, 1&#x3D; applicable. | [optional] 
**eligible_mortgage_gse** | **int** | Indicates if a Government Sponsored Enterprise Mortgage Rider was recorded with the mortgage loan. 0 or null &#x3D; not applicable, 1&#x3D; applicable. | [optional] 
**variable_rider** | **string** | CoreLogic standardized value that indicates if the mortgage loan contains an adjustable or variable rate rider. 0 or null &#x3D; not applicable, 1&#x3D; applicable. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

