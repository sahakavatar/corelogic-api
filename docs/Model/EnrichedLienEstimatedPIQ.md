# EnrichedLienEstimatedPIQ

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**unpaid_principal_balance** | **float** | CoreLogic enriched estimated Unpaid Principal Balance (UPB) value on Purchase and Refinance loans only. The Enriched proprietary logic is designed to improve completeness and accuracy. | [optional] 
**upb_confidence_rank** | **int** | A rank of 1-5 depicting the confidence level of the Estimated Unpaid Principal Balance. 5 is the most confident ranking. Values: 5 &#x3D; Excellent; 4 &#x3D; Very Good; 3 &#x3D; Good; 2 &#x3D; Fair; 1 &#x3D; Very Low | [optional] 
**present_ltv** | **int** | CoreLogic enriched estimated Loan to Value (LTV) at &#x27;Present&#x27; date. This is a dynamic ratio, at time of calculation. The Enriched proprietary logic is designed to improve completeness and accuracy. Value expressed as a percentage. | [optional] 
**present_ltv_confidence_rank** | **int** | A rank of 1-5 depicting the confidence level of the Estimated Present Loan to Value. 5 is the most confident ranking. Values: 5 &#x3D; Excellent; 4 &#x3D; Very Good; 3 &#x3D; Good; 2 &#x3D; Fair; 1 &#x3D; Very Low; 0 &#x3D; UNK (Insufficient Information) | [optional] 
**upb_and_pltv_run_date** | **int** | Month, Day, Year that UPB and PLTV enriched calculations were run for loan. Purchase and Refinance loans are only loan types associated with Estimated UPB and Estimated PLTV. Format: YYYYMMDD | [optional] 
**ltv** | **int** | CoreLogic enriched estimated Loan to Value (LTV) of Primary Loan at loan origination. This is a static ratio. The Enriched proprietary logic is designed to improve completeness and accuracy. Value expressed as a percentage. | [optional] 
**ltv_confidence_rank** | **int** | A rank of 1-5 depicting the confidence level of the Estimated Present Loan to Value. 5 is the most confident ranking. Rank descriptions: 5 &#x3D; Excellent; 4 &#x3D; Very Good; 3 &#x3D; Good; 2 &#x3D; Fair; 1 &#x3D; Very Low; 0 &#x3D; UNK ( Insufficient Information) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

