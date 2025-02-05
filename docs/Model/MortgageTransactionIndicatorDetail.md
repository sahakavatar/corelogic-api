# MortgageTransactionIndicatorDetail

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**conforming_loan_indicator** | **int** | CoreLogic standardized value that indicates if the mortgage loan is considered a conforming loan. Values: 0 or null &#x3D; not applicable, 1&#x3D; applicable. | [optional] 
**equity_loan_indicator** | **int** | CoreLogic standardized value that indicates if the mortgage loan is an equity loan. Values: 0 or null &#x3D; not applicable, 1&#x3D; applicable. | [optional] 
**nonconforming_loan_indicator** | **int** | CoreLogic standardized value that indicates if the mortgage loan is a non-conforming loan. Values: 0 or null &#x3D; not applicable, 1&#x3D; applicable. | [optional] 
**other_subordinate_loan_indicator** | **int** | CoreLogic standardized value that indicates if the mortgage loan is a subordinate lien. Values: 0 or null &#x3D; not applicable, 1&#x3D; applicable. | [optional] 
**concurrent_junior_mortgage_indicator** | **string** | Identifies a junior mortgage that is recorded simultaneous/concurrent/at the same time as the senior mortgage on the property. | [optional] 
**silent_second_mortgage_indicator** | **string** | Identifies a junior mortgage where Seller is also the Lender. | [optional] 
**mortgage_upsell_indicator** | **string** | Identifies a junior mortgage where Lender is an institution and is the same Lender as the senior mortgage. | [optional] 
**seller_carry_back_indicator** | **int** | CoreLogic standardized value that indicates if part or all of the mortgage loan is carried by the seller. Values: 0 or null &#x3D; not applicable, 1&#x3D; applicable. | [optional] 
**gse_eligible_mortgage_indicator** | **int** | Indicates if a Government Sponsored Enterprise entity (GSE) Mortgage Rider was recorded with the mortgage loan. Values: 0 or null &#x3D; not applicable, 1 &#x3D; applicable. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

