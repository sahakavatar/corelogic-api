# EnrichedLienRiskEquity

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**purchase_recording_date** | **int** | Date the most recent purchase of the property was recorded at the county. Format: YYYYMMDD. | [optional] 
**purchase_amount** | **float** | Dollar amount of the most recent purchase of the property. | [optional] 
**total_number_of_open_mortgage_liens** | **int** | Total number of open mortgage liens against the property. | [optional] 
**total_amount_of_open_mortgage_liens** | **float** | Sum total of origination amounts of open mortgage liens against the property. | [optional] 
**purchase_combined_ltv** | **float** | Ratio of the sum amount of all open liens at time of purchase divided by the sale amount. Value expressed as a percentage. | [optional] 
**estimated_equity** | **float** | Estimated difference between current AVM value and the sum of all open, original loan amounts, for all open liens.  Uses THVx for Risk Management AVM that provides high level of accuracy and hit rate combination for quality control, workflow, new portfolio evaluation, and other risk management uses. | [optional] 
**estimated_combined_ltv** | **float** | Estimated ratio of the sum amount of all open liens at origination divided into the current AVM value. Uses THVx for AVM that provides highest hit rate for use cases. Value expressed as a percentage. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

